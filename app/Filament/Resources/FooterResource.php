<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterResource\Pages;
use App\Filament\Resources\FooterResource\RelationManagers;
use App\Models\Footer;
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

class FooterResource extends Resource
{
    protected static ?string $model = Footer::class;

    protected static ?string $navigationLabel = 'Секция: Подвал';
    protected static ?string $modelLabel = 'Секция: Подвал';
    protected static ?string $pluralModelLabel = 'Секция: Подвал';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
        TextInput::make('graphic')
            ->label('График')
            ->placeholder('Пн-Пт: с 09:00 до 17:00')
            ->live(onBlur: true)
            ->required(),
        TextInput::make('graphic-two')
            ->label('График2')
            ->placeholder('Пн-Пт: с 09:00 до 17:00')
            ->live(onBlur: true),
        TextInput::make('phone')
            ->label('Номер телефона')
            ->placeholder('+7 (000) 000-00-00')
            ->live(onBlur: true)
            ->required(),
        FileUpload::make('soc-images')
            ->image()
            ->label('Картинка соц сетей')
            ->directory('footers')
            ->required(),
        TextInput::make('phone-two')
            ->label('Номер телефона2')
            ->placeholder('+7 (000) 000-00-00')
            ->live(onBlur: true),
        FileUpload::make('soc-images-2')
            ->image()
            ->label('Картинка соц сетей-2')
            ->directory('footers'),              
        MarkdownEditor::make('adress')
            ->label('Адресс')
            ->placeholder('Волгоградская, Херсонская 12')
            ->columnSpanFull()
            ->required()
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('graphic')
                ->label('График')
                ->searchable(),
            TextColumn::make('graphic-two')
                ->label('График-2')
                ->searchable(),
            TextColumn::make('phone')
                ->label('Телефон')
                ->searchable(),
            TextColumn::make('phone-two')
                ->label('Телефон-2')
                ->searchable(),
            TextColumn::make('adress')
                ->label('Адресс')
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
            'index' => Pages\ListFooters::route('/'),
            'create' => Pages\CreateFooter::route('/create'),
            'edit' => Pages\EditFooter::route('/{record}/edit'),
        ];
    }
}
