<?php

namespace App\Filament\Admin\Resources\PaketInternets;

use App\Filament\Admin\Resources\PaketInternets\Pages\CreatePaketInternet;
use App\Filament\Admin\Resources\PaketInternets\Pages\EditPaketInternet;
use App\Filament\Admin\Resources\PaketInternets\Pages\ListPaketInternets;
use App\Filament\Admin\Resources\PaketInternets\Schemas\PaketInternetForm;
use App\Filament\Admin\Resources\PaketInternets\Tables\PaketInternetsTable;
use App\Models\PaketInternet;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PaketInternetResource extends Resource
{
    protected static ?string $model = PaketInternet::class;
    protected static ?string $navigationLabel = 'paket internet';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedWifi;

    public static function form(Schema $schema): Schema
    {
        return PaketInternetForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PaketInternetsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPaketInternets::route('/'),
            'create' => CreatePaketInternet::route('/create'),
            'edit' => EditPaketInternet::route('/{record}/edit'),
        ];
    }
}
