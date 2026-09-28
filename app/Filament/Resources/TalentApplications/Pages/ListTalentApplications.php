<?php

namespace App\Filament\Resources\TalentApplications\Pages;

use App\Filament\Resources\TalentApplications\TalentApplicationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTalentApplications extends ListRecords
{
    protected static string $resource = TalentApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
