<?php

namespace App\Filament\Resources\TalentApplications\Pages;

use App\Filament\Resources\TalentApplications\TalentApplicationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTalentApplication extends EditRecord
{
    protected static string $resource = TalentApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
