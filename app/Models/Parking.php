<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'vehicle_type',
        'vehicle_number',
        'entry_time',
        'exit_time',
        'extra_service',
        'grand_total',
        'payment_status',
        'entry_code',
        'slot_no',
    ];
}
