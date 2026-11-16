<?php

namespace App\Filament\Admin\Resources\PaketInternets\Pages;

use App\Filament\Admin\Resources\PaketInternets\PaketInternetResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePaketInternet extends CreateRecord
{
    protected static string $resource = PaketInternetResource::class;

    protected function getRedirectUrl(): string
    {
        return PaketInternetResource::getUrl('index');
    }
}
