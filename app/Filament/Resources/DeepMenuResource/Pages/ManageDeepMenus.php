<?php

namespace App\Filament\Resources\DeepMenuResource\Pages;

use App\Filament\Resources\DeepMenuResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDeepMenus extends ManageRecords
{
    protected static string $resource = DeepMenuResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
