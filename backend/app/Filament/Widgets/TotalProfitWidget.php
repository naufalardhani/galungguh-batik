<?php
namespace App\Filament\Widgets;

use App\Models\Keuangan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class TotalProfitWidget extends BaseWidget
{
    protected function getCards(): array
    {
        $totalProfit = Keuangan::sum('profit');

        return [
            Card::make('Total Profit', 'Rp ' . number_format($totalProfit))
                ->color('success'),
        ];
    }
}
