<?php

namespace App\Filament\Admin\Resources\InovasiResource\Pages;

use App\Filament\Admin\Resources\InovasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInovasis extends ListRecords
{
    protected static string $resource = InovasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
