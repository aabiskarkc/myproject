<?php

namespace App\Filament\Resources\Abouts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;

class AboutsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
    \Filament\Tables\Columns\TextColumn::make('education'),

    \Filament\Tables\Columns\TextColumn::make('location'),

    \Filament\Tables\Columns\TextColumn::make('experience'),
])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
