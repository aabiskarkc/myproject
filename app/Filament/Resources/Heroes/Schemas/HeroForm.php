<?php

namespace App\Filament\Resources\Heroes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
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
                    ->label('Profile Image')
                    ->image()
                    ->disk('public')
                    ->directory('heroes')
                    ->visibility('public')
                    ->fetchFileInformation(false)
                    ->maxFiles(1)
                    ->maxSize(2048)
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/gif'])
                    ->panelLayout('integrated')
                    ->imagePreviewHeight('150'),

                Select::make('status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->default('inactive')
                    ->required(),
            ]);
    }
}
