<?php

namespace App\Filament\Resources\BoardMembersResource\Pages;

use App\Filament\Resources\BoardMembersResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBoardMembers extends ListRecords
{
    protected static string $resource = BoardMembersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
