<?php

namespace App\Filament\Resources\FromResource\Pages;

use App\Filament\Resources\FromResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFrom extends EditRecord
{
    protected static string $resource = FromResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
