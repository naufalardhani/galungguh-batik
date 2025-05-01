<?php
// filepath: app/Models/Keuangan.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'waktu',
        'pemasukan',
        'pengeluaran',
        'profit',
    ];

    protected $casts = [
        'waktu' => 'date', // Change 'datetime' to 'date' to store only the date
    ];
}