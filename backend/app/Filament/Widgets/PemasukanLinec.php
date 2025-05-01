<?php
namespace App\Filament\Widgets;

use App\Models\Keuangan;
use Filament\Widgets\ChartWidget;

class PemasukanLinec extends ChartWidget
{
    protected static ?string $heading = 'Pemasukan';

    protected function getData(): array
    {
        $pemasukan = Keuangan::selectRaw('DATE(waktu) as timestamp, SUM(pemasukan) as total_pemasukan')
            ->groupBy('timestamp')
            ->orderBy('timestamp')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Pemasukan',
                    'data' => $pemasukan->pluck('total_pemasukan')->toArray(),
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 2,
                    'fill' => true,
                ],
            ],
            'labels' => $pemasukan->pluck('timestamp')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
