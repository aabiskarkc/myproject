<?php

namespace App\Filament\Resources\Heroes\Pages;

use App\Filament\Resources\Heroes\HeroResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHero extends CreateRecord
{
    protected static string $resource = HeroResource::class;

    public function create(bool $another = false): void
    {
        set_time_limit(120);

        parent::create($another);
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['profile_image']) && is_array($data['profile_image'])) {
            $data['profile_image'] = array_values($data['profile_image'])[0] ?? null;
        }

        return $data;
    }
}
