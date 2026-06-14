<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('label')
                    ->required()
                    ->placeholder('e.g. Email, Phone, Location'),

                TextInput::make('value')
                    ->required()
                    ->placeholder('e.g. john@example.com'),

                TextInput::make('link')
                    ->url()
                    ->placeholder('Optional link (mailto:, tel:, or https://)'),
            ]);
    }
}
