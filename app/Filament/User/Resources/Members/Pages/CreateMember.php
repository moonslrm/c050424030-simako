<?php

namespace App\Filament\User\Resources\Members\Pages;

use App\Filament\User\Resources\Members\MemberResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMember extends CreateRecord
{
    protected static string $resource = MemberResource::class;
}
