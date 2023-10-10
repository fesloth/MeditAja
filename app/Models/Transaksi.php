<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    // Nama tabel yang akan digunakan oleh model ini
    protected $table = 'transaksi';

    // Kolom-kolom yang dapat diisi
    protected $fillable = [
        'user_id',
        'paket_id',
        'jumlah_pembayaran',
        'waktu_pembayaran',
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi dengan model PaketPremium
    public function paketPremium()
    {
        return $this->belongsTo(PaketPremium::class, 'paket_id');
    }
}
