<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroResource\Pages;
use App\Filament\Resources\HeroResource\RelationManagers;
use App\Models\Hero;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static ?string $navigationLabel = 'Секция: Главная страница';
    protected static ?string $modelLabel = 'Секция: Главная страница';
    protected static ?string $pluralModelLabel = 'Секция: Главная страница';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            FileUpload::make('hero-images')
            ->image()
            ->label('Картинка главного экана')
            ->directory('hero')
            ->columnSpan(2),
        FileUpload::make('hero-images-two')
            ->image()
            ->label('Картинка главного экана-2')
            ->directory('hero')
            ->columnSpan(2),
        TextInput::make('title')
            ->label('Заголовок главного экана')
            ->placeholder('Заголовок главного экана')
            ->live(onBlur: true)
            ->required(),
        TextInput::make('title-two')
            ->label('Заголовок главного экана-2')
            ->placeholder('Заголовок главного экана-2')
            ->live(onBlur: true)
            ->required(),
        TextInput::make('description')
            ->label('Подзаголовок главного экана')
            ->placeholder('Заголовок главного экана')
            ->live(onBlur: true)
            ->required(),
        TextInput::make('description-two')
            ->label('Подзаголовок главного экана-2')
            ->placeholder('Заголовок главного экана-2')
            ->live(onBlur: true)
            ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('title')
                ->label('Заголовок')
                ->searchable(),
            TextColumn::make('title-two')
                ->label('Заголовок-2')
                ->searchable(),
            TextColumn::make('description')
                ->label('Описание')
                ->searchable(),
            TextColumn::make('description-two')
                ->label('Описание-2')
                ->searchable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
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
            'index' => Pages\ListHeroes::route('/'),
            'create' => Pages\CreateHero::route('/create'),
            'edit' => Pages\EditHero::route('/{record}/edit'),
        ];
    }
}
