<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mood extends Model
{
    protected $table = 'moods'; // Specify the table name

    // Define the fillable attributes (attributes that can be mass-assigned)
    protected $fillable = [
        'user_id',
        'mood',
        'description',
    ];

    // Define any relationships, for example, with a User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
