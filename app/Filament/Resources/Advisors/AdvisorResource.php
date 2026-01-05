<?php

namespace App\Filament\Resources\Advisors;

use App\Filament\Resources\Advisors\Pages\CreateAdvisor;
use App\Filament\Resources\Advisors\Pages\EditAdvisor;
use App\Filament\Resources\Advisors\Pages\ListAdvisors;
use App\Filament\Resources\Advisors\Schemas\AdvisorForm;
use App\Filament\Resources\Advisors\Tables\AdvisorsTable;
use App\Models\Advisor;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class AdvisorResource extends Resource
{
    protected static ?string $model = Advisor::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;
    protected static ?string $navigationLabel = 'Pembina';

    public static function form(Schema $schema): Schema
    {
        return AdvisorForm::configure($schema);
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
            'edit' => EditAdvisor::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return auth()->check() && !auth()->user()->hasRole('user');
    }

    public static function canEdit(Model $record): bool
    {
        return auth()->check() && !auth()->user()->hasRole('user');
    }

    public static function canDelete(Model $record): bool
    {
        return auth()->check() && !auth()->user()->hasRole('user');
    }

    public static function canDeleteAny(): bool
    {
        return auth()->check() && !auth()->user()->hasRole('user');
    }
}
