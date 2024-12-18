<?php

namespace App\Filament\Resources\AtasanResource\Pages;

use App\Filament\Resources\AtasanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAtasan extends EditRecord
{
    protected static string $resource = AtasanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
