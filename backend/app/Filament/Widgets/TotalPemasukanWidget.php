<?php
namespace App\Filament\Widgets;

use App\Models\Keuangan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class TotalPemasukanWidget extends BaseWidget
{
    protected function getCards(): array
    {
        $totalPemasukan = Keuangan::sum('pemasukan');

        return [
            Card::make('Total Pemasukan', 'Rp ' . number_format($totalPemasukan, 0, ',', '.')),
        ];
    }
}