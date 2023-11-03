<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketPremium extends Model
{
    use HasFactory;

    protected $table = 'paket_premium'; // Menyebutkan nama tabel yang sesuai

    protected $fillable = [
        'nama_paket',
        'deskripsi',
        'harga',
        'paket_id'
    ];

    public static function getPaketIdByNama($namaPaket)
    {
        return static::where('nama_paket', $namaPaket)->value('id');
    }
}
