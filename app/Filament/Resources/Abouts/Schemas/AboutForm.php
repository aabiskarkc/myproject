<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('education')
                    ->required(),

                TextInput::make('location')
                    ->required(),

                TextInput::make('experience')
                    ->required(),
            ]);
    }
}
