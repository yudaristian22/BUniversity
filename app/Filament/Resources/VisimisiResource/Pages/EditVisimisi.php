<?php

namespace App\Filament\Resources\VisimisiResource\Pages;

use App\Filament\Resources\VisimisiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVisimisi extends EditRecord
{
    protected static string $resource = VisimisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
