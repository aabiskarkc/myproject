<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Schemas\Schema;

class SkillsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
    \Filament\Forms\Components\TextInput::make('name')
        ->required(),

    \Filament\Forms\Components\TextInput::make('percentage')
        ->numeric()
        ->minValue(0)
        ->maxValue(100)
        ->required(),
]);
            
    }
}
