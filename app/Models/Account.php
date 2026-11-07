<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'accounts';

    protected $fillable = [
    'picture',
    'account_balance',
    'days_per_challenge',
    'days_per_verification',
    'reward',
    'price',
    'profit_target',
    'minimum_trading_days',
    'leverage',
    'overall_loss',
    'daily_loss',
    'max_daily_loss',
    'max_overall_loss',
    'duration',
    'profit_share',
    ];
}
