<?php

namespace App\Filament\User\Resources\Advisors\Pages;

use App\Filament\User\Resources\Advisors\AdvisorResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAdvisor extends CreateRecord
{
    protected static string $resource = AdvisorResource::class;
}
