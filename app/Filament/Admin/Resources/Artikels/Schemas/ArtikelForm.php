<?php

namespace App\Filament\Admin\Resources\Artikels\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ArtikelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('gambar')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('artikel')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
