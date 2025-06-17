<?php

namespace App\Filament\Resources\FromResource\Pages;

use App\Filament\Resources\FromResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFrom extends ViewRecord
{
    protected static string $resource = FromResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
