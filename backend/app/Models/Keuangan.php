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
    ];

    protected $casts = [
        'waktu' => 'date', // Change 'datetime' to 'date' to store only the date
    ];

    protected static function booted()
    {
        static::creating(function ($keuangan) {
            $keuangan->profit = $keuangan->pemasukan - $keuangan->pengeluaran; // Calculate profit dynamically
        });
    }
}