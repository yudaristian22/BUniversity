<?php

namespace App\Filament\Resources\GreetingResource\Pages;

use App\Filament\Resources\GreetingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGreeting extends EditRecord
{
    protected static string $resource = GreetingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
