<?php

namespace App\Filament\Organisasi\Resources\Advisors\Pages;

use App\Filament\Organisasi\Resources\Advisors\AdvisorResource;
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
