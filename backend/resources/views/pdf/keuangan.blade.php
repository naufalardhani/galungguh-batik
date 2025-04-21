<!-- filepath: resources/views/pdf/keuangan.blade.php -->
<!DOCTYPE html>
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
        <tbody>
            @foreach ($keuangans as $keuangan)
                <tr>
                    <td>{{ $keuangan->waktu }}</td>
                    <td>{{ $keuangan->pemasukan }}</td>
                    <td>{{ $keuangan->pengeluaran }}</td>
                    <td>{{ $keuangan->profit }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>