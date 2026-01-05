<?php

namespace App\Filament\User\Resources\Activities\Pages;

use App\Filament\User\Resources\Activities\ActivityResource;
use Filament\Resources\Pages\CreateRecord;

class CreateActivity extends CreateRecord
{
    protected static string $resource = ActivityResource::class;
}
