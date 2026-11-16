<?php

namespace App\Filament\Admin\Resources\Pelanggans\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Symfony\Contracts\Service\Attribute\Required;
use function Laravel\Prompts\select;

class PelangganForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_pelanggan')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('no_telp')
                    ->tel()
                    ->Required()
                    ->numeric()
                    ->maxLength(12)
                    ->columnSpanFull(),
                select::make('paket_internet_id')
                    ->relationship('PaketInternet', 'nama_paket')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->columnSpanFull(),
                RichEditor::make('alamat')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]);
    }
}
