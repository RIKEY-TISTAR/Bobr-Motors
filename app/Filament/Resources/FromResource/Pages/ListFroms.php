<?php

namespace App\Filament\Resources\FromResource\Pages;

use App\Filament\Resources\FromResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFroms extends ListRecords
{
    protected static string $resource = FromResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
