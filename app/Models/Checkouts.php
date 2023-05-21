<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkouts extends Model
{
    use HasFactory, SoftDeletes;
    protected $nullable = [
        'user_id',
        'camp_id',
        'card_number',
        'cvc',
        'is_paid', 

    ];
}
