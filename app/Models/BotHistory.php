<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BotHistory extends Model
{
    use HasFactory;
      protected $fillable = [
       'user_id',
       'bot_id',
       'level',
        'name',
        'category',
        'image',
        'processed',
        'price',
        'active_connections',
        'rating',
        'percentage_rating',
        'action',

    ];
}
