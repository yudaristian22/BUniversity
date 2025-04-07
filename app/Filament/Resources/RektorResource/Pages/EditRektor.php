<?php

namespace App\Filament\Resources\RektorResource\Pages;

use App\Filament\Resources\RektorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRektor extends EditRecord
{
    protected static string $resource = RektorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
