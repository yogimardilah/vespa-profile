<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpmbSubmissionResource\Pages;
use App\Models\SpmbSubmission;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;

class SpmbSubmissionResource extends Resource
{
    protected static ?string $model = SpmbSubmission::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->required(),
            Forms\Components\TextInput::make('email'),
            Forms\Components\TextInput::make('phone'),
            Forms\Components\TextInput::make('school'),
            Forms\Components\Textarea::make('notes'),
            Forms\Components\TextInput::make('status'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('id')->sortable(),
            Tables\Columns\TextColumn::make('name')->searchable(),
            Tables\Columns\TextColumn::make('phone'),
            Tables\Columns\TextColumn::make('school'),
            Tables\Columns\TextColumn::make('status'),
            Tables\Columns\TextColumn::make('created_at')->dateTime('Y-m-d H:i'),
        ])->actions([
            Tables\Actions\ViewAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSpmbSubmissions::route('/'),
            'view' => Pages\ViewSpmbSubmission::route('/{record}'),
        ];
    }
}
