<?php

namespace App\Filament\Resources\Heroes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class HeroForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),

                TextInput::make('profession')
                    ->required(),

                Textarea::make('description')
                    ->required(),

                FileUpload::make('profile_image')
                    ->image()
                    ->disk('public')
                    ->directory('heroes')
                    ->visibility('public')
                    ->fetchFileInformation(false)
                    ->maxSize(5120),
            ]);
    }
}