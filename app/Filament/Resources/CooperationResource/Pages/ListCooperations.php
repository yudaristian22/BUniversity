<?php

namespace App\Filament\Resources\CooperationResource\Pages;

use App\Filament\Resources\CooperationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCooperations extends ListRecords
{
    protected static string $resource = CooperationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
