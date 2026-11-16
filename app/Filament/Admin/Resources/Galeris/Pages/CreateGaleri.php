<?php

namespace App\Filament\Admin\Resources\Galeris\Pages;

use App\Filament\Admin\Resources\Galeris\GaleriResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGaleri extends CreateRecord
{
    protected static string $resource = GaleriResource::class;

    protected function getRedirectUrl(): string
    {
        return GaleriResource::getUrl('index');
    }
}
