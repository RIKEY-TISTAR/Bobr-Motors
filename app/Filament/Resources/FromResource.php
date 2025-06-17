<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FromResource\Pages;
use App\Filament\Resources\FromResource\RelationManagers;
use App\Models\Form as ModelsForm;
use App\Models\From;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FromResource extends Resource
{
    protected static ?string $model = ModelsForm::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'БД: Сообщений от пользователей';
    protected static ?string $modelLabel = 'БД: Сообщений от пользователей';
    protected static ?string $pluralModelLabel = 'БД: Сообщений от пользователей';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            TextInput::make('name')
                ->label('Имя')
                ->required()
                ->live(onBlur: true),    
            TextInput::make('email')
                ->label('Почта')
                ->required()
                ->live(onBlur: true),      
            TextInput::make('contactNumber')
                ->label('Телефон')
                ->required()
                ->live(onBlur: true),                  
            MarkdownEditor::make('message')
                ->label('Коментарий')
                ->columnSpanFull()
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Имя')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Почта')
                    ->searchable(),
                TextColumn::make('contactNumber')
                    ->label('Телефон')
                    ->searchable(),
                TextColumn::make('message')
                    ->label('Коментарий')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFroms::route('/'),
            'create' => Pages\CreateFrom::route('/create'),
            'view' => Pages\ViewFrom::route('/{record}'),
            'edit' => Pages\EditFrom::route('/{record}/edit'),
        ];
    }
}
