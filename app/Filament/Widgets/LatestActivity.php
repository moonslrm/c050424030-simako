<?php

namespace App\Filament\Widgets;

use App\Models\Activity;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\Action;


class LatestActivity extends TableWidget
{
    protected static ?string $heading = 'Latest Activities';

    protected function getTableQuery(): Builder
    {
        return Activity::query()->orderBy('id', 'desc')->limit(5);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('id')->label('ID')->sortable(),
            TextColumn::make('title')->label('Nama')->limit(200),
            TextColumn::make('date')->label('Pelaksanaan')->dateTime()->sortable(),
            TextColumn::make('location')->label('Lokasi')->limit(200),
        ];
    }

    protected function getTableToolbarAction(): array
    {
        return [];
    }
}

   