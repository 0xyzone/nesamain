<?php

namespace App\Livewire\Events;

use Filament\Tables;
use Livewire\Component;
use App\Models\NesaEvent;
use Filament\Tables\Table;
use Filament\Support\Colors\Color;
use Illuminate\Contracts\View\View;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;

class ListNesaEvent extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->query(NesaEvent::query())
            ->heading('Esports Events')
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                    ->label(''),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('games')
                    ->badge(),
                // Tables\Columns\TextColumn::make('prize_pool')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('from_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
            ])
            ->deferLoading(false)
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('View Event')
                ->url(fn (NesaEvent $record): string | null => $record->event_page_url ?? null)
                ->button()
                ->iconButton()
                ->icon('heroicon-s-eye')
                ->color(Color::Amber)
                ->openUrlInNewTab()
                ->visible(fn (NesaEvent $record): bool => $record->event_page_url != null)
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    //
                ]),
            ]);
    }

    public function render(): View
    {
        return view('livewire.events.list-nesa-event')
            ->layout('layouts.app');
    }
}
