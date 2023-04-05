<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'description',
        'unit_price',
        'quantity',
        'price_in_bdt',
        'created_at',
        
    ];

}
