<?php

namespace App\Filament\Resources\VisimisiResource\Pages;

use App\Filament\Resources\VisimisiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisimisis extends ListRecords
{
    protected static string $resource = VisimisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
