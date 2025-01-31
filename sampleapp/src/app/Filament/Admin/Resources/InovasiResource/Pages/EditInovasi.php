<?php

namespace App\Filament\Admin\Resources\InovasiResource\Pages;

use App\Filament\Admin\Resources\InovasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInovasi extends EditRecord
{
    protected static string $resource = InovasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
