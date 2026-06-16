<?php

namespace App\Filament\Resources\Heroes\Pages;

use App\Filament\Resources\Heroes\HeroResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHero extends EditRecord
{
    protected static string $resource = HeroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    public function save(bool $shouldRedirect = true, bool $shouldSendSavedNotification = true): void
    {
        set_time_limit(120);

        parent::save($shouldRedirect, $shouldSendSavedNotification);
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['profile_image']) && is_array($data['profile_image'])) {
            $data['profile_image'] = array_values($data['profile_image'])[0] ?? null;
        }

        return $data;
    }
}
