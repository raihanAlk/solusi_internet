<?php

namespace App\Filament\Admin\Resources\PaketInternets\Pages;

use App\Filament\Admin\Resources\PaketInternets\PaketInternetResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPaketInternet extends EditRecord
{
    protected static string $resource = PaketInternetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->successRedirectUrl(PaketInternetResource::getUrl('index'),),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return PaketInternetResource::getUrl('index');
    }
}
