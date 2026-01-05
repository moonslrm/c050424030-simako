<?php

namespace App\Filament\User\Resources\Advisors\Pages;

use App\Filament\User\Resources\Advisors\AdvisorResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAdvisor extends ViewRecord
{
    protected static string $resource = AdvisorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
