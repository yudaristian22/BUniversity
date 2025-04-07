<?php

namespace App\Filament\Resources\GreetingResource\Pages;

use App\Filament\Resources\GreetingResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGreeting extends CreateRecord
{
    protected static string $resource = GreetingResource::class;
}
