<?php

namespace App\Filament\Admin\Resources\Artikels\Pages;

use App\Filament\Admin\Resources\Artikels\ArtikelResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditArtikel extends EditRecord
{
    protected static string $resource = ArtikelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
            -> successRedirectUrl(ArtikelResource::getUrl('index'),)
        ];
    }
    protected function getRedirectUrl(): string
    {
        return ArtikelResource::getUrl('index');
    }
}
