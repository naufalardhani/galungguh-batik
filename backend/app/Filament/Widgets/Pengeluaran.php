<?php
namespace App\Filament\Widgets;

use App\Models\Keuangan;
use Filament\Widgets\ChartWidget;

class Pengeluaran extends ChartWidget
{
    protected static ?string $heading = 'Pengeluaran';

    protected function getData(): array
    {
        $pengeluaran = Keuangan::selectRaw('DATE(waktu) as timestamp, SUM(pengeluaran) as total_pengeluaran')
            ->groupBy('timestamp')
            ->orderBy('timestamp')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Pengeluaran',
                    'data' => $pengeluaran->pluck('total_pengeluaran')->toArray(),
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $pengeluaran->pluck('timestamp')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
