<?php

namespace App\Filament\Resources\RektorResource\Pages;

use App\Filament\Resources\RektorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRektors extends ListRecords
{
    protected static string $resource = RektorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
