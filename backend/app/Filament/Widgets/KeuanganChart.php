<?php
// filepath: app/Filament/Widgets/KeuanganChart.php
namespace App\Filament\Widgets;

use App\Models\Keuangan;
use Filament\Widgets\ChartWidget;

class KeuanganChart extends ChartWidget
{
    protected static ?string $heading = 'Keuangan';

    protected function getData(): array
    {
        $keuangan = Keuangan::selectRaw('DATE(waktu) as timestamp, SUM(pemasukan) as pemasukan, SUM(pengeluaran) as pengeluaran')
            ->groupBy('timestamp')
            ->orderBy('timestamp')
            ->get();

        $netValues = $keuangan->map(function ($item) {
            return $item->pemasukan - $item->pengeluaran;
        });

        return [
            'datasets' => [
                [
                    'label' => 'Nilai Uang',
                    'data' => $netValues->toArray(),
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'fill' => false,
                    'tension' => 0.1,
                ],
            ],
            'labels' => $keuangan->pluck('timestamp')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}