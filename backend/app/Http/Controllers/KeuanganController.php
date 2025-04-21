<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function exportPdf()
    {
        $keuangans = Keuangan::all();

        $html = '<!DOCTYPE html>
<html>
<head>
    <title>Keuangan Report</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Keuangan Report</h1>
    <table>
        <thead>
            <tr>
                <th>Waktu</th>
                <th>Pemasukan</th>
                <th>Pengeluaran</th>
                <th>Profit</th>
            </tr>
        </thead>
        <tbody>';

        foreach ($keuangans as $keuangan) {
            $html .= '<tr>
                <td>' . $keuangan->waktu . '</td>
                <td>' . $keuangan->pemasukan . '</td>
                <td>' . $keuangan->pengeluaran . '</td>
                <td>' . $keuangan->profit . '</td>
            </tr>';
        }

        $html .= '</tbody>
    </table>
</body>
</html>';

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        return $dompdf->stream('keuangan.pdf');
    }
}
