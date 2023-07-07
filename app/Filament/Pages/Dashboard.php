<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\StatsOverview;
use Filament\Pages\Dashboard as BasePage;

class Dashboard extends BasePage
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.dashboard';

    protected function getColumns(): int|array
    {
        return 6;
    }

    protected function getFooterWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }
}
