<?php

namespace App\Filament\Resources;

use App\NewsStatus;
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
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\NewsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NewsResource\RelationManagers;
use Rawilk\FilamentQuill\Filament\Forms\Components\QuillEditor;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;

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
                            Forms\Components\Select::make('status')
                                ->options(NewsStatus::class)
                                ->default('draft')
                                ->disablePlaceholderSelection(),
                            Forms\Components\Hidden::make('user_id')
                                ->default(Auth::id()),
                        ])->columnSpan(1),
                    Section::make('Image')
                        ->schema([
                            Forms\Components\FileUpload::make('header_image_path')
                                ->label('Header Image')
                                ->hint('(1920px x 1080px)')
                                ->image(),
                            TextInput::make('header_image_caption')
                                ->hint('max 30 chars.')
                                ->characterLimit(30)
                                ->maxLength(30)
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
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('header_image_path')
                    ->label('Header Image'),
                Tables\Columns\TextColumn::make('header_image_caption')
                    ->label('Caption'),
                Tables\Columns\TextColumn::make('status')
                    ->badge(),
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
