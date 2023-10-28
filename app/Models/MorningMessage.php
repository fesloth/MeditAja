<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MorningMessage extends Model
{
    protected $table = 'morning_messages_table_v2';
    protected $fillable = ['content'];
    public $timestamps = false;
}
