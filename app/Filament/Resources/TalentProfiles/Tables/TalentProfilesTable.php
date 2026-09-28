<?php

namespace App\Filament\Resources\TalentProfiles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TalentProfilesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('public_name')
                    ->label('Nom public')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('title')
                    ->label('Titre / Métier')
                    ->searchable(),

                TextColumn::make('city')
                    ->label('Ville')
                    ->searchable(),

                TextColumn::make('featured_badge')
                    ->label('Badge')
                    ->badge()
                    ->color('success'),

                IconColumn::make('is_verified')
                    ->label('Vérifié')
                    ->boolean(),

                IconColumn::make('is_active')
                    ->label('Actif')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->label('Membre depuis le')
                    ->dateTime('d/m/Y')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->recordActions([
                EditAction::make()->label('Modifier'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
