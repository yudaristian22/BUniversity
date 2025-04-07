<?php

namespace App\Filament\Resources\CooperationResource\Pages;

use App\Filament\Resources\CooperationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCooperation extends EditRecord
{
    protected static string $resource = CooperationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
