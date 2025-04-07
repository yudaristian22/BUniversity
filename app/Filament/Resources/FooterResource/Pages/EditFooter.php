<?php

namespace App\Filament\Resources\FooterResource\Pages;

use App\Filament\Resources\FooterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFooter extends EditRecord
{
    protected static string $resource = FooterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
