<?php

namespace App\Filament\User\Resources\Advisors\Pages;

use App\Filament\User\Resources\Advisors\AdvisorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAdvisors extends ListRecords
{
    protected static string $resource = AdvisorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
