<?php

namespace App\Filament\Resources\StudentResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActivitiesRelationManager extends RelationManager
{
    protected static string $relationship = 'activities';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Student Name')->schema([
                        Select::make('student_id')->label('Student Name')
                            ->relationship('student', 'id', function ($query) {
                                return $query->select('students.id', 'users.name')
                                    ->join('users', 'students.user_id', '=', 'users.id');
                            })->searchable()
                            ->getSearchResultsUsing(function ($query, $search) {
                                return \App\Models\Student::query()
                                    ->select('students.id', 'users.name')
                                    ->join('users', 'students.user_id', '=', 'users.id')
                                    ->where('users.name', 'like', "%{$search}%")
                                    ->orWhere('students.id', 'like', "%{$search}%")
                                    ->get()
                                    ->mapWithKeys(fn($student) => [$student->id => $student->name]);
                            })
                            ->getOptionLabelUsing(function ($value) {
                                $student = \App\Models\Student::find($value);
                                return $student ? $student->user->name : null;
                            })->required(),
                    ])
                ])->columnSpan(2),
                Group::make()->schema([
                    Section::make('Activty Type')->schema([
                        Select::make('activity_type_id')->relationship('activityType', 'title')->required(),
                    ]),
                ])->columnSpan(2),
                Group::make()->schema([
                    Section::make('Activity Details')->schema([
                        TextInput::make('title')->required()->maxLength(255),
                        TextInput::make('hours')->required()->maxLength(255)->numeric()->rules(['numeric', 'min:80'])->placeholder('80')->helperText('Minimum 80 hours required'),
                        DateTimePicker::make('start_date')->required()->default(now()),
                        DateTimePicker::make('end_date')->required()->default(now()),
                        Textarea::make('description')->required()->maxLength(255)->columnSpanFull(),
                    ])->columns(2),
                    Section::make('Activity Documents')->schema([
                        FileUpload::make('file')->directory('activities/report')->preserveFilenames()->openable()->downloadable()->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])->required(),
                        FileUpload::make('certificate')
                            ->directory('activities/certificate')
                            ->preserveFilenames()
                            ->openable()
                            ->downloadable()
                            ->multiple()
                            ->nullable()
                            ->acceptedFileTypes(['application/pdf', 'image/webp', 'image/png', 'image/jpeg', 'image/heic'])
                            ->label('Upload Certificates'),
                        Select::make('status')->options([
                            'pending' => 'Pending',
                            'approved' => 'Approved',
                            'rejected' => 'Rejected',
                        ])->required()->default('pending'),
                    ])->columns(2),
                ])->columnSpanFull(),
            ])->columns(4);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                Tables\Columns\TextColumn::make('title'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
