<?php

namespace App\Filament\Resources\CollegeResource\Pages;

use App\Filament\Resources\CollegeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCollege extends EditRecord
{
    protected static string $resource = CollegeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
