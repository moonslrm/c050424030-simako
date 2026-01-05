<?php

namespace App\Filament\User\Resources\Advisors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AdvisorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('nip')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone_number')
                    ->tel()
                    ->default(null),
            ]);
    }
}
