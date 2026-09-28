<?php

namespace App\Filament\Resources\TalentApplications\Schemas;

use App\Models\Category;
use App\Models\Skill;
use App\Models\TalentApplication;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TalentApplicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // 1. Informations Personnelles
                Section::make('Informations Personnelles')
                    ->description('Coordonnées et identité du candidat')
                    ->columns(2)
                    ->components([
                        TextInput::make('reference')
                            ->label('Référence')
                            ->disabled()
                            ->dehydrated(),

                        Select::make('status')
                            ->label('Statut du dossier')
                            ->options([
                                TalentApplication::STATUS_PENDING => '🟡 En attente',
                                TalentApplication::STATUS_UNDER_REVIEW => '🔵 En cours d\'examen',
                                TalentApplication::STATUS_INFORMATION_REQUESTED => '🟠 Compléments demandés',
                                TalentApplication::STATUS_ACCEPTED => '🟢 Acceptée',
                                TalentApplication::STATUS_REJECTED => '🔴 Refusée',
                                TalentApplication::STATUS_ARCHIVED => '⚪ Archivée',
                            ])
                            ->required(),

                        TextInput::make('first_name')
                            ->label('Prénom')
                            ->required(),

                        TextInput::make('last_name')
                            ->label('Nom de famille')
                            ->required(),

                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required(),

                        TextInput::make('phone')
                            ->label('Téléphone')
                            ->tel()
                            ->required(),

                        TextInput::make('city')
                            ->label('Ville / Localité')
                            ->required(),

                        TextInput::make('age_range')
                            ->label('Tranche d\'âge'),

                        TextInput::make('linkedin_url')
                            ->label('Profil LinkedIn')
                            ->url(),

                        TextInput::make('website_url')
                            ->label('Site Web / Portfolio')
                            ->url(),

                        TextInput::make('instagram_url')
                            ->label('Instagram')
                            ->url(),

                        TextInput::make('twitter_url')
                            ->label('Twitter / X')
                            ->url(),
                    ]),

                // 2. Profil Professionnel & Réalisations
                Section::make('Profil Professionnel & Compétences')
                    ->description('Expertise et réalisations concrètes')
                    ->columns(2)
                    ->components([
                        TextInput::make('primary_activity')
                            ->label('Activité principale')
                            ->required(),

                        TextInput::make('current_status')
                            ->label('Statut actuel')
                            ->required(),

                        TextInput::make('experience_duration')
                            ->label('Durée d\'expérience')
                            ->required(),

                        TextInput::make('availability')
                            ->label('Disponibilité')
                            ->required(),

                        Textarea::make('featured_achievement')
                            ->label('Réalisation phare')
                            ->columnSpanFull()
                            ->rows(4)
                            ->required(),
                    ]),

                // 3. Expérience en Ligne (Confidentiel / Usage Interne)
                Section::make('Expérience en Ligne (Usage Interne / Privé)')
                    ->description('Ces données ne sont jamais exposées sur le profil public')
                    ->columns(2)
                    ->components([
                        TextInput::make('has_online_earnings')
                            ->label('Génère des revenus en ligne')
                            ->formatStateUsing(fn ($state) => $state ? 'Oui' : 'Non'),

                        TextInput::make('approximate_earnings')
                            ->label('Revenus approximatifs générés'),

                        TextInput::make('online_activity_type')
                            ->label('Type d\'activité en ligne')
                            ->columnSpanFull(),

                        Textarea::make('current_main_activity')
                            ->label('Activité principale du moment')
                            ->columnSpanFull()
                            ->rows(2),

                        Textarea::make('current_challenge')
                            ->label('Principal défi actuel')
                            ->columnSpanFull()
                            ->rows(2),
                    ]),

                // 4. Objectifs et Opportunités
                Section::make('Objectifs & Opportunités recherchées')
                    ->columns(1)
                    ->components([
                        Textarea::make('primary_goal')
                            ->label('Objectif principal avec Talent Club')
                            ->rows(3),

                        Textarea::make('next_big_goal')
                            ->label('Prochain grand défi professionnel')
                            ->rows(3),
                    ]),

                // 5. Suivi Administratif & Décision
                Section::make('Suivi Administratif & Historique')
                    ->columns(2)
                    ->components([
                        DateTimePicker::make('submitted_at')
                            ->label('Date de soumission')
                            ->disabled(),

                        DateTimePicker::make('reviewed_at')
                            ->label('Date de révision')
                            ->disabled(),

                        Textarea::make('admin_notes')
                            ->label('Notes internes de l\'administrateur')
                            ->columnSpanFull()
                            ->rows(3)
                            ->placeholder('Remarques internes de l\'équipe...'),

                        Textarea::make('information_request_message')
                            ->label('Dernière demande de précisions envoyée')
                            ->columnSpanFull()
                            ->rows(3)
                            ->disabled(),

                        Textarea::make('candidate_response_message')
                            ->label('Réponse transmise par le candidat')
                            ->columnSpanFull()
                            ->rows(3)
                            ->disabled(),

                        Textarea::make('rejection_reason')
                            ->label('Motif de refus (le cas échéant)')
                            ->columnSpanFull()
                            ->rows(2)
                            ->disabled(),
                    ]),
            ]);
    }
}
