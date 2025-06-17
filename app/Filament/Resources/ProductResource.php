<?php

namespace App\Filament\Resources;

use Illuminate\Support\Str;
use Filament\Forms\Set;
use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Markdown;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationLabel = 'Секция: Товары';

    protected static ?string $modelLabel = 'Секция: Товар';
    
    protected static ?string $pluralModelLabel = 'Секция: Товары';

      protected static ?string $navigationIcon = 'heroicon-o-device-phone-mobile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Основная информация')->schema([
                        TextInput::make('name')
                            ->label('Название товара')
                            ->placeholder('Техническое обслуживание')
                            ->helperText('Техническое обслуживание')
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                            ->required(),
                        TextInput::make('slug')
                            ->maxLength(255)
                            ->disabled()
                            ->dehydrated()
                            ->unique(Product::class, 'slug', ignoreRecord: true)
                            ->required(),
                        TextInput::make('sub-title')
                            ->label('Подпункт товара')
                            ->placeholder('Диагностика двигателя')
                            ->helperText('Диагностика двигателя')
                            ->maxLength(255)
                            ->required()
                            ->live(onBlur: true),
                        TextInput::make('sub-title-two')
                            ->label('Подпункт товара-2')
                            ->placeholder('Диагностика двигателя')
                            ->helperText('Диагностика двигателя')
                            ->maxLength(255)
                            ->required()
                            ->live(onBlur: true),
                        TextInput::make('sub-title-thre')
                            ->label('Подпункт товара-3')
                            ->placeholder('Диагностика двигателя')
                            ->helperText('Диагностика двигателя')
                            ->maxLength(255)
                            ->required()
                            ->live(onBlur: true),
                        MarkdownEditor::make('description')
                            ->label('Описание товара')
                            ->placeholder('Описание товара')
                            ->columnSpanFull()
                            ->maxLength(500)
                    ])->columns(2),
                    Section::make('Изображение')->schema([
                        FileUpload::make('images')
                            ->multiple()
                            ->directory('products')
                            ->maxFiles(5)
                            ->reorderable()
                    ])->columnSpanFull()
                ])->columnSpan(2),
                Group::make()->schema([
                    Section::make()->schema([
                        Select::make('category_id')
                            ->preload()
                            ->searchable()
                            ->placeholder('Выбрать категорию')
                            ->label('Выберите категорию')
                            ->relationship('category', 'name')
                            ->required(),
                        Select::make('brand_id')
                            ->preload()
                            ->searchable()
                            ->label('Выберите мастера')
                            ->placeholder('Выберите мастера')
                            ->required()
                            ->relationship('brand', 'speciality'),
                    ])->columnSpanFull(),
                    Section::make('Цена')->schema([
                        TextInput::make('price')
                            ->numeric()
                            ->placeholder('1999')
                            ->helperText('Цена не должна быть меньше 0')
                            ->inputMode('decimal')
                            ->label('Укажите цену за 1 ед.')
                            ->suffix('₽')
                            ->required(),
                    ])->columnSpanFull(),
                    Section::make('Статус товара')->schema([
                        Toggle::make('is_active')
                            ->default(true)
                            ->label('Отображать на сайте'),
                        Toggle::make('is_stock')
                            ->default(true)
                            ->label('В наличии'),
                        Toggle::make('is_featured')
                            ->label('Популярный товар'),
                        Toggle::make('is_sale')
                            ->label('Акция')
                    ])->columnSpanFull(),
                ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Название товара')
                    ->searchable(),
                TextColumn::make('sub-title')
                    ->label('Подпункт товара')
                    ->searchable(),
                TextColumn::make('sub-title-two')
                    ->label('Подпункт товара-2')
                    ->searchable(),
                TextColumn::make('sub-title-thre')
                    ->label('Подпункт товара-3')
                    ->searchable(),
                // TextColumn::make('description')
                //     ->searchable(),
                TextColumn::make('category.name')
                    ->label('Категория')
                    ->sortable(),
                TextColumn::make('brand.name')
                    ->label('Имя мастера')
                    ->sortable(),
                TextColumn::make('price')
                    ->label('Цена')
                    ->money('RUB')
                    ->sortable(),
                IconColumn::make('is_active')
                    ->label('Авктивна')
                    ->boolean(),
                IconColumn::make('is_stock')
                    ->label('Есть в запасе')
                    ->boolean(),
                IconColumn::make('is_featured')
                    ->label('Популярный')
                    ->boolean(),
                IconColumn::make('is_sale')
                    ->label('Скидка')
                    ->boolean(),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->label('Категория')
                    ->relationship('category', 'name'),
                SelectFilter::make('brand')
                    ->label('Бренд')
                    ->relationship('brand', 'name'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
