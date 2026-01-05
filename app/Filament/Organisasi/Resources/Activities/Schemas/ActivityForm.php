<?php

namespace App\Filament\Organisasi\Resources\Activities\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ActivityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                DatePicker::make('date')
                    ->required(),
                TextInput::make('location')
                    ->default(null),
                TextInput::make('status')
                    ->required()
                    ->default('scheduled'),
            ]);
    }
}
