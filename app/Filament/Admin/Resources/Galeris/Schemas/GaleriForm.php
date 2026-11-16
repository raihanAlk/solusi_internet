<?php

namespace App\Filament\Admin\Resources\Galeris\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class GaleriForm
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
                RichEditor::make('keterangan')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
