<?php

namespace App\Filament\Resources\TalentApplications\Tables;

use App\Mail\ApplicationAcceptedMail;
use App\Mail\ApplicationInformationRequestedMail;
use App\Mail\ApplicationRejectedMail;
use App\Models\TalentApplication;
use App\Models\TalentProfile;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Mail;

class TalentApplicationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('reference')
                    ->label('Référence')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->weight('bold')
                    ->color('primary'),

                TextColumn::make('first_name')
                    ->label('Prénom')
                    ->searchable(),

                TextColumn::make('last_name')
                    ->label('Nom')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable()
                    ->icon(Heroicon::OutlinedEnvelope),

                TextColumn::make('primary_activity')
                    ->label('Activité principale')
                    ->searchable()
                    ->badge()
                    ->color('gray'),

                TextColumn::make('city')
                    ->label('Ville')
                    ->searchable()
                    ->icon(Heroicon::OutlinedMapPin),

                TextColumn::make('status')
                    ->label('Statut')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        TalentApplication::STATUS_PENDING => 'En attente',
                        TalentApplication::STATUS_UNDER_REVIEW => 'En cours d\'examen',
                        TalentApplication::STATUS_INFORMATION_REQUESTED => 'Compléments demandés',
                        TalentApplication::STATUS_ACCEPTED => 'Acceptée',
                        TalentApplication::STATUS_REJECTED => 'Refusée',
                        TalentApplication::STATUS_ARCHIVED => 'Archivée',
                        default => $state,
                    })
                    ->color(fn (string $state): string => match ($state) {
                        TalentApplication::STATUS_PENDING => 'warning',
                        TalentApplication::STATUS_UNDER_REVIEW => 'info',
                        TalentApplication::STATUS_INFORMATION_REQUESTED => 'orange',
                        TalentApplication::STATUS_ACCEPTED => 'success',
                        TalentApplication::STATUS_REJECTED => 'danger',
                        TalentApplication::STATUS_ARCHIVED => 'gray',
                        default => 'gray',
                    }),

                TextColumn::make('submitted_at')
                    ->label('Soumis le')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->defaultSort('submitted_at', 'desc')
            ->filters([
                SelectFilter::make('status')
                    ->label('Statut')
                    ->options([
                        TalentApplication::STATUS_PENDING => 'En attente',
                        TalentApplication::STATUS_UNDER_REVIEW => 'En cours d\'examen',
                        TalentApplication::STATUS_INFORMATION_REQUESTED => 'Compléments demandés',
                        TalentApplication::STATUS_ACCEPTED => 'Acceptée',
                        TalentApplication::STATUS_REJECTED => 'Refusée',
                        TalentApplication::STATUS_ARCHIVED => 'Archivée',
                    ]),

                SelectFilter::make('city')
                    ->label('Ville')
                    ->options(fn () => TalentApplication::query()->whereNotNull('city')->distinct()->pluck('city', 'city')->toArray()),

                SelectFilter::make('experience_duration')
                    ->label('Expérience')
                    ->options([
                        'moins_1_an'  => 'Moins d\'1 an',
                        '1_2_ans'     => '1 à 2 ans',
                        '3_5_ans'     => '3 à 5 ans',
                        '5_10_ans'    => '5 à 10 ans',
                        'plus_10_ans' => 'Plus de 10 ans',
                    ]),
            ])
            ->recordActions([
                // 1. Examiner
                Action::make('start_review')
                    ->label('Examiner')
                    ->icon(Heroicon::OutlinedEye)
                    ->color('info')
                    ->visible(fn (TalentApplication $record) => $record->status === TalentApplication::STATUS_PENDING)
                    ->action(function (TalentApplication $record) {
                        $record->update([
                            'status' => TalentApplication::STATUS_UNDER_REVIEW,
                            'reviewed_at' => now(),
                            'reviewed_by' => auth()->id(),
                        ]);

                        Notification::make()
                            ->title('Dossier passé en cours d\'examen')
                            ->success()
                            ->send();
                    }),

                // 2. Demander compléments d'informations
                Action::make('request_info')
                    ->label('Compléments')
                    ->icon(Heroicon::OutlinedChatBubbleBottomCenterText)
                    ->color('warning')
                    ->visible(fn (TalentApplication $record) => in_array($record->status, [
                        TalentApplication::STATUS_PENDING,
                        TalentApplication::STATUS_UNDER_REVIEW,
                    ]))
                    ->form([
                        Textarea::make('admin_message')
                            ->label('Message pour le candidat')
                            ->placeholder('Précisez les pièces ou éléments que vous souhaitez que le candidat complète...')
                            ->required()
                            ->rows(4),
                    ])
                    ->action(function (TalentApplication $record, array $data) {
                        $record->update([
                            'status' => TalentApplication::STATUS_INFORMATION_REQUESTED,
                            'information_request_message' => $data['admin_message'],
                            'reviewed_at' => now(),
                            'reviewed_by' => auth()->id(),
                        ]);

                        try {
                            Mail::to($record->email)->send(new ApplicationInformationRequestedMail($record, $data['admin_message']));
                        } catch (\Throwable $e) {
                            // Ignored to avoid breaking admin transaction
                        }

                        Notification::make()
                            ->title('Demande de compléments envoyée au candidat')
                            ->success()
                            ->send();
                    }),

                // 3. Accepter la candidature & Créer le profil membre
                Action::make('accept')
                    ->label('Accepter')
                    ->icon(Heroicon::OutlinedCheckCircle)
                    ->color('success')
                    ->visible(fn (TalentApplication $record) => in_array($record->status, [
                        TalentApplication::STATUS_PENDING,
                        TalentApplication::STATUS_UNDER_REVIEW,
                        TalentApplication::STATUS_INFORMATION_REQUESTED,
                    ]))
                    ->requiresConfirmation()
                    ->modalHeading('Accepter cette candidature')
                    ->modalDescription('Le candidat deviendra membre officiel de Talent Club. Un profil public sera automatiquement activé.')
                    ->form([
                        Textarea::make('welcome_message')
                            ->label('Mot d\'accueil personnalisé (optionnel)')
                            ->placeholder('Bienvenue dans la communauté des talents béninois !')
                            ->rows(3),
                    ])
                    ->action(function (TalentApplication $record, array $data) {
                        $record->update([
                            'status' => TalentApplication::STATUS_ACCEPTED,
                            'reviewed_at' => now(),
                            'reviewed_by' => auth()->id(),
                        ]);

                        // Créer / Activer le profil Talent officiel
                        $profile = TalentProfile::firstOrCreate(
                            ['talent_application_id' => $record->id],
                            [
                                'user_id'        => $record->user_id,
                                'public_name'    => $record->first_name . ' ' . strtoupper(substr($record->last_name, 0, 1)) . '.',
                                'title'          => $record->primary_activity,
                                'avatar_path'    => $record->profile_photo_path,
                                'city'           => $record->city,
                                'country'        => 'Bénin',
                                'public_bio'     => $record->featured_achievement,
                                'availability'   => $record->availability ?: 'immediate',
                                'is_verified'    => true,
                                'is_active'      => true,
                                'featured_badge' => 'Cohorte 2026',
                                'website_url'    => $record->website_url,
                                'linkedin_url'   => $record->linkedin_url,
                                'instagram_url'  => $record->instagram_url,
                            ]
                        );

                        // Lier les compétences
                        $skillIds = $record->skills()->pluck('skills.id')->toArray();
                        if (!empty($skillIds)) {
                            $profile->skills()->sync($skillIds);
                        }

                        // Envoyer l'email de bienvenue
                        try {
                            Mail::to($record->email)->send(new ApplicationAcceptedMail($record, $data['welcome_message'] ?? null));
                        } catch (\Throwable $e) {
                            // Non-bloquant
                        }

                        Notification::make()
                            ->title('Candidature acceptée ! Le profil Talent Club a été créé avec succès.')
                            ->success()
                            ->send();
                    }),

                // 4. Refuser
                Action::make('reject')
                    ->label('Refuser')
                    ->icon(Heroicon::OutlinedXCircle)
                    ->color('danger')
                    ->visible(fn (TalentApplication $record) => in_array($record->status, [
                        TalentApplication::STATUS_PENDING,
                        TalentApplication::STATUS_UNDER_REVIEW,
                        TalentApplication::STATUS_INFORMATION_REQUESTED,
                    ]))
                    ->form([
                        Textarea::make('rejection_reason')
                            ->label('Motif du refus (partagé avec bienveillance dans l\'email)')
                            ->placeholder('Ex: Profil ne correspondant pas aux critères requis pour cette cohorte...')
                            ->required()
                            ->rows(4),
                    ])
                    ->action(function (TalentApplication $record, array $data) {
                        $record->update([
                            'status' => TalentApplication::STATUS_REJECTED,
                            'rejection_reason' => $data['rejection_reason'],
                            'reviewed_at' => now(),
                            'reviewed_by' => auth()->id(),
                        ]);

                        try {
                            Mail::to($record->email)->send(new ApplicationRejectedMail($record, $data['rejection_reason']));
                        } catch (\Throwable $e) {
                            // Non-bloquant
                        }

                        Notification::make()
                            ->title('Candidature refusée et email transmis')
                            ->warning()
                            ->send();
                    }),

                // 5. Archiver
                Action::make('archive')
                    ->label('Archiver')
                    ->icon(Heroicon::OutlinedArchiveBox)
                    ->color('gray')
                    ->requiresConfirmation()
                    ->visible(fn (TalentApplication $record) => $record->status !== TalentApplication::STATUS_ARCHIVED)
                    ->action(function (TalentApplication $record) {
                        $record->update([
                            'status' => TalentApplication::STATUS_ARCHIVED,
                        ]);

                        Notification::make()
                            ->title('Candidature archivée')
                            ->send();
                    }),

                // 6. Modifier / Voir les détails
                EditAction::make()
                    ->label('Détails'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
