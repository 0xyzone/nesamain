<?php

namespace App\Filament\Resources\NesaEventResource\Pages;

use App\Filament\Resources\NesaEventResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNesaEvents extends ListRecords
{
    protected static string $resource = NesaEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
