<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
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
                    ->directory('projects'),

                TextInput::make('project_url')
                    ->label('Project URL')
                    ->url(),

                TextInput::make('github_url')
                    ->label('GitHub URL')
                    ->url(),
            ]);
    }
}
