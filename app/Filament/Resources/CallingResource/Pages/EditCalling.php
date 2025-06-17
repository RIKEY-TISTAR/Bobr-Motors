<?php

namespace App\Filament\Resources\CallingResource\Pages;

use App\Filament\Resources\CallingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCalling extends EditRecord
{
    protected static string $resource = CallingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
