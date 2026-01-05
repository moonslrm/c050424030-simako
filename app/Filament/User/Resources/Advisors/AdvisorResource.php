<?php

namespace App\Filament\User\Resources\Advisors;

use App\Filament\User\Resources\Advisors\Pages\CreateAdvisor;
use App\Filament\User\Resources\Advisors\Pages\EditAdvisor;
use App\Filament\User\Resources\Advisors\Pages\ListAdvisors;
use App\Filament\User\Resources\Advisors\Pages\ViewAdvisor;
use App\Filament\User\Resources\Advisors\Schemas\AdvisorForm;
use App\Filament\User\Resources\Advisors\Schemas\AdvisorInfolist;
use App\Filament\User\Resources\Advisors\Tables\AdvisorsTable;
use App\Models\Advisor;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AdvisorResource extends Resource
{
    protected static ?string $model = Advisor::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUser;
    protected static ?string $navigationLabel = 'Pembimbing';

    public static function form(Schema $schema): Schema
    {
        return AdvisorForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AdvisorInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AdvisorsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAdvisors::route('/'),
            'create' => CreateAdvisor::route('/create'),
            'view' => ViewAdvisor::route('/{record}'),
            'edit' => EditAdvisor::route('/{record}/edit'),
        ];
    }
}
