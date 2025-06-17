<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CallingResource\Pages;
use App\Filament\Resources\CallingResource\RelationManagers;
use App\Models\Calling;
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

class CallingResource extends Resource
{
    protected static ?string $model = Calling::class;

    protected static ?string $navigationLabel = 'Секция: Почему мы';
    protected static ?string $modelLabel = 'Секция: Почему мы';
    protected static ?string $pluralModelLabel = 'Секция: Почему мы';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
        FileUpload::make('image')
            ->image()
            ->label('Иконка')
            ->directory('callings')
            ->required()
            ->columnSpan(2),
        TextInput::make('title')
            ->label('Заголовок')
            ->placeholder('Позвоните или приезжайте на личную консультацию')
            ->live(onBlur: true)
            ->required(),
        MarkdownEditor::make('desc')
            ->label('Подзаголовок')
            ->placeholder('Пн-Пт: с 09:00 до 17:00 Менеджер запишет на проверку в удобное для Вас время.')
            ->required()
            ->columnSpanFull(),
        FileUpload::make('image-two')
            ->image()
            ->label('Иконка')
            ->directory('callings')
            ->required()
            ->columnSpan(2),
        TextInput::make('title-two')
            ->label('Заголовок')
            ->placeholder('Позвоните или приезжайте на личную консультацию')
            ->required()
            ->live(onBlur: true)
            ->required(),
        MarkdownEditor::make('desc-two')
            ->label('Подзаголовок контактной информации')
            ->placeholder('Пн-Пт: с 09:00 до 17:00 Менеджер запишет на проверку в удобное для Вас время.')
            ->required()
            ->columnSpanFull(),
        FileUpload::make('image-thre')
            ->image()
            ->label('Соц сети')
            ->directory('callings')
            ->required()
            ->columnSpan(2),
        TextInput::make('title-thre')
            ->label('Заголовок контактной информации')
            ->placeholder('Позвоните или приезжайте на личную консультацию')
            ->required()
            ->live(onBlur: true)
            ->required(),
        MarkdownEditor::make('desc-thre')
            ->label('Подзаголовок контактной информации')
            ->placeholder('Пн-Пт: с 09:00 до 17:00 Менеджер запишет на проверку в удобное для Вас время.')
            ->required()
            ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([               
                TextColumn::make('title')
                    ->label('Заголовок')
                    ->searchable(),
                TextColumn::make('desc')
                    ->label('Описание'),               
                TextColumn::make('title-two')
                    ->label('Заголовок')
                    ->searchable(),
                TextColumn::make('desc-two')
                    ->label('Описание'),               
                TextColumn::make('title-thre')
                    ->label('Заголовок')
                    ->searchable(),
                TextColumn::make('desc-thre')
                    ->label('Описание'),
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
            'index' => Pages\ListCallings::route('/'),
            'create' => Pages\CreateCalling::route('/create'),
            'edit' => Pages\EditCalling::route('/{record}/edit'),
        ];
    }
}
