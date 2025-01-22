<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NesaEventResource\Pages;
use App\Filament\Resources\NesaEventResource\RelationManagers;
use App\Models\NesaEvent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NesaEventResource extends Resource
{
    protected static ?string $model = NesaEvent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('logo')
                ->image()
                ->directory('tournament/logos'),
                Forms\Components\Select::make('games')
                ->options([
                    'mlbb' => 'MLBB',
                    'dota2' => 'DOTA 2',
                    'csgo' => 'CS:GO',
                    'cs2' => 'CS 2',
                    'freefire' => 'FreeFire',
                    'pubg' => 'PUBG',
                    'pubgm' => 'PUBGm',
                    'tekken' => 'Tekken',
                    'fifa' => 'FIFA',
                    'efootball' => 'eFootball',
                ])
                ->multiple()
                ->searchable(),
                Forms\Components\TextInput::make('organizers'),
                Forms\Components\TextInput::make('prize_pool')
                    ->numeric(),
                Forms\Components\DatePicker::make('from_date'),
                Forms\Components\DatePicker::make('end_date'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('logo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('games')
                ->badge(),
                Tables\Columns\TextColumn::make('prize_pool')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('from_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListNesaEvents::route('/'),
            'create' => Pages\CreateNesaEvent::route('/create'),
            'edit' => Pages\EditNesaEvent::route('/{record}/edit'),
        ];
    }
}
