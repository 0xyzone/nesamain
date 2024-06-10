<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\News;
use App\Models\User;
use Filament\Tables;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\NewsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NewsResource\RelationManagers;
use Rawilk\FilamentQuill\Filament\Forms\Components\QuillEditor;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;
    protected static bool $shouldSkipAuthorization = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Content')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        // RichEditor::make('body')
                        //     ->label('Main Content')
                        //     ->required()
                        //     ->columnSpanFull(),
                        QuillEditor::make('body')
                            ->label('Main Content')
                            ->required()
                            ->columnSpanFull(),
                    ])->columnSpan(2),
                Group::make([
                    Section::make('Basic Info')
                        ->schema([
                            Forms\Components\Select::make('category_id')
                                ->required()
                                ->label('Category')
                                ->options(Category::all()->pluck('name', 'id')->toArray()),
                            Forms\Components\Select::make('user_id')
                                ->required()
                                ->label('Author')
                                ->options(User::all()->pluck('name', 'id')->toArray())
                                ->default(Auth::id()),
                        ])->columnSpan(1),
                    Section::make('Image')
                        ->schema([
                            Forms\Components\FileUpload::make('header_image_path')
                                ->image(),
                            Forms\Components\TextInput::make('header_image_caption')
                        ])->columnSpan(1),
                ])
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('header_image_path'),
                Tables\Columns\ImageColumn::make('header_image_caption'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
