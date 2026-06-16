<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),

                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('projects')
                    ->visibility('public')
                    ->fetchFileInformation(false)
                    ->maxSize(5120),

                TextInput::make('project_url')
                    ->label('Project URL')
                    ->url(),

                TextInput::make('github_url')
                    ->label('GitHub URL')
                    ->url(),

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
