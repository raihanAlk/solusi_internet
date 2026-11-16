<?php

namespace App\Filament\Admin\Resources\Pelanggans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PelanggansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_pelanggan')
                ->searchable()
                ->sortable(),
                TextColumn::make('no_telp')
                ->searchable()
                ->sortable(),
                TextColumn::make('PaketInternet.nama_paket')
                ->Label('nama paket')
                ->searchable()
                ->sortable(),
                TextColumn::make('alamat')
                    ->html(true),
            ])
            ->filters([
                // 
            ]) 
            ->recordActions([
                DeleteAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
