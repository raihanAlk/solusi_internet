<?php

namespace App\Filament\Admin\Resources\Galeris\Pages;

use App\Filament\Admin\Resources\Galeris\GaleriResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\EditRecord;

class EditGaleri extends EditRecord
{
    protected static string $resource = GaleriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
            ->successRedirectUrl(GaleriResource::getUrl('index'),)
        ];
    }
    protected function getRedirectUrl(): string
    {
        return GaleriResource::getUrl('index');
    }
}
