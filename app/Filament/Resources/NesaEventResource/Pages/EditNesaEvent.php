<?php

namespace App\Filament\Resources\NesaEventResource\Pages;

use App\Filament\Resources\NesaEventResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNesaEvent extends EditRecord
{
    protected static string $resource = NesaEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
