<?php

namespace App\Filament\Organisasi\Resources\Advisors\Pages;

use App\Filament\Organisasi\Resources\Advisors\AdvisorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAdvisor extends EditRecord
{
    protected static string $resource = AdvisorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
