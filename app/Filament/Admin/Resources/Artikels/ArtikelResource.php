<?php

namespace App\Filament\Admin\Resources\Artikels;

use App\Filament\Admin\Resources\Artikels\Pages\CreateArtikel;
use App\Filament\Admin\Resources\Artikels\Pages\EditArtikel;
use App\Filament\Admin\Resources\Artikels\Pages\ListArtikels;
use App\Filament\Admin\Resources\Artikels\Schemas\ArtikelForm;
use App\Filament\Admin\Resources\Artikels\Tables\ArtikelsTable;
use App\Models\Artikel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;
    protected static ?string $navigationLabel = 'artikel';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedFolder;

    public static function form(Schema $schema): Schema
    {
        return ArtikelForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ArtikelsTable::configure($table);
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
            'index' => ListArtikels::route('/'),
            'create' => CreateArtikel::route('/create'),
            'edit' => EditArtikel::route('/{record}/edit'),
        ];
    }
}
