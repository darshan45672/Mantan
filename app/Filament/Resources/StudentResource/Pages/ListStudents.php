<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Exports\StudentsExport;
use App\Filament\Resources\StudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Facades\Excel;

class ListStudents extends ListRecords
{
    protected static string $resource = StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('exportStudents')->label('Export Students')->icon('heroicon-o-document-arrow-down')
            ->action(function (Collection $records){
                return Excel::download(new StudentsExport($records, 0), 'students.xlsx');  
            })
            // Actions\ExportAction::make()
                // ->formats(['csv', 'xlsx']),
        ];
    }
}
