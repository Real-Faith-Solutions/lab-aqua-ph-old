<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_no',
        'soa_no',
        'date',
        'amount_paid',
        'balance',
        'payment_status',
    ];
}
