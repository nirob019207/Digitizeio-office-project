<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EapanseHead extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'exp_head',
        'created_at',
        
    ];

}
