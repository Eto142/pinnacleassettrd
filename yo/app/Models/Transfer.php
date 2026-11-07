<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $table = 'transfers';
    protected $fillable = [
        'user_id',
        'transaction_id',
        'mode',
        'amount',
        'wallet_address',
    ];

    // Define relationships here if needed

    public function user()
    {
       return $this->belongsTo(User::class, 'user_id','id');
    }
}
