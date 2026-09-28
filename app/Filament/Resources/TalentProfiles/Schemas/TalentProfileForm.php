<?php

namespace App\Filament\Resources\TalentProfiles\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TalentProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('talent_application_id')
                    ->numeric(),
                Select::make('user_id')
                    ->relationship('user', 'name'),
                TextInput::make('public_name')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('avatar_path'),
                TextInput::make('city')
                    ->required(),
                TextInput::make('country')
                    ->required()
                    ->default('Bénin'),
                Textarea::make('public_bio')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('availability')
                    ->required()
                    ->default('immediate'),
                TextInput::make('starting_price'),
                Toggle::make('is_verified')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('featured_badge'),
                TextInput::make('website_url')
                    ->url(),
                TextInput::make('linkedin_url')
                    ->url(),
                TextInput::make('instagram_url')
                    ->url(),
                TextInput::make('github_url')
                    ->url(),
            ]);
    }
}
