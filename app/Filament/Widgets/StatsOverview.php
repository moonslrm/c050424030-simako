<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Activity;
use App\Models\Organization;
use App\Models\Member;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Activities', Activity::count())
                ->description('Total Kegiatan Terdaftar'),
                

            Stat::make('Total Organizations', Organization::count())
                ->description('Total Organisasi Terdaftar'),

            Stat::make('Total Members', Member::count())
                ->description('Total Anggota Terdaftar'),
        ];
    }
}
