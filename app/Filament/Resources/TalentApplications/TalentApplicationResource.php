<?php

namespace App\Filament\Resources\TalentApplications;

use App\Filament\Resources\TalentApplications\Pages\CreateTalentApplication;
use App\Filament\Resources\TalentApplications\Pages\EditTalentApplication;
use App\Filament\Resources\TalentApplications\Pages\ListTalentApplications;
use App\Filament\Resources\TalentApplications\Schemas\TalentApplicationForm;
use App\Filament\Resources\TalentApplications\Tables\TalentApplicationsTable;
use App\Models\TalentApplication;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TalentApplicationResource extends Resource
{
    protected static ?string $model = TalentApplication::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static string|UnitEnum|null $navigationGroup = 'Gestion des Candidatures';

    protected static ?string $modelLabel = 'Candidature';

    protected static ?string $pluralModelLabel = 'Candidatures';

    protected static ?string $recordTitleAttribute = 'reference';

    public static function getNavigationBadge(): ?string
    {
        $count = static::getModel()::where('status', TalentApplication::STATUS_PENDING)->count();
        return $count > 0 ? (string) $count : null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }

    public static function form(Schema $schema): Schema
    {
        return TalentApplicationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TalentApplicationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTalentApplications::route('/'),
            'create' => CreateTalentApplication::route('/create'),
            'edit' => EditTalentApplication::route('/{record}/edit'),
        ];
    }
}
