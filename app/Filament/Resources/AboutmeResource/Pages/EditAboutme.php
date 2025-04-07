<?php

namespace App\Filament\Resources\AboutmeResource\Pages;

use App\Filament\Resources\AboutmeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutme extends EditRecord
{
    protected static string $resource = AboutmeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
