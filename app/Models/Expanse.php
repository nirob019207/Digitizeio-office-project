<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expanse extends Model
{

    use SoftDeletes;
    protected $fillable = [
        'exp_name',
        'exp_head',
        'amount',
        'exp_textArea',
        'created_at',
        
    ];
   
}
