<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BasePage;
use Filament\Widgets\StatsOverviewWidget;

class Dashboard extends BasePage
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.dashboard';

    // protected function getColumns(): int|array
    // {
    //     return 2;
    // }

    // protected function getFooterWidgets(): array
    // {
    //     return [
    //         StatsOverviewWidget::class,
    //     ];
    // }
}
