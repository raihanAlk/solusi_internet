<?php

namespace App\Filament\Admin\Resources\Pelanggans\Pages;

use App\Filament\Admin\Resources\Pelanggans\PelangganResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPelanggan extends EditRecord
{
    protected static string $resource = PelangganResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
            ->successRedirectUrl(PelangganResource::getUrl('index'),),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return PelangganResource::getUrl('index');
    }
}
