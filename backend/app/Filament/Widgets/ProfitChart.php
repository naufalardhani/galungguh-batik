<?php
namespace App\Filament\Widgets;

use App\Models\Keuangan;
use Filament\Widgets\ChartWidget;

class ProfitChart extends ChartWidget
{
    protected static ?string $heading = 'Profit';

    protected function getData(): array
    {
        $keuangan = Keuangan::selectRaw('DATE(waktu) as timestamp, SUM(profit) as profit')
            ->groupBy('timestamp')
            ->orderBy('timestamp')
            ->get();

        $profitValues = $keuangan->pluck('profit');

        return [
            'datasets' => [
                [
                    'label' => 'Profit',
                    'data' => $profitValues->toArray(),
                    'backgroundColor' => 'rgba(128, 0, 128, 0.6)', // Purple color for bars
                    'borderColor' => 'rgba(128, 0, 128, 1)', // Purple border
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $keuangan->pluck('timestamp')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar'; // Bar chart for profits
    }
}