<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeditationJournal extends Model
{
    protected $table = 'meditation_journals'; // Nama tabel dalam database

    protected $fillable = ['date', 'entry', 'user_id']; // Kolom yang dapat diisi

    // Relasi dengan pengguna (jika Anda memiliki tabel pengguna)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
