<?php

namespace App\Filament\Admin\Resources\PaketInternets\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PaketInternetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_paket')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                TextInput::make('kecepatan')
                    ->required()
                    ->maxLength(10)
                    ->columnSpanFull(),
                TextInput::make('harga')
                    ->required()
                    ->numeric()
                    ->columnSpanFull(),
                RichEditor::make('deskripsi')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Toggle::make('status')
                    ->required()
                    ->default(true)
                    ->columnSpanFull(),
            ]);
    }
}
