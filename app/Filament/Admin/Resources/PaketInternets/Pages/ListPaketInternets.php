<?php

namespace App\Filament\Admin\Resources\PaketInternets\Pages;

use App\Filament\Admin\Resources\PaketInternets\PaketInternetResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPaketInternets extends ListRecords
{
    protected static string $resource = PaketInternetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
