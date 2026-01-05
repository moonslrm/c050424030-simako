<?php

namespace App\Filament\User\Resources\Organizations\Pages;

use App\Filament\User\Resources\Organizations\OrganizationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOrganization extends CreateRecord
{
    protected static string $resource = OrganizationResource::class;
}
