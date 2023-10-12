<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'description', 'deadline', 'priority', 'status', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class); 
    }
}
