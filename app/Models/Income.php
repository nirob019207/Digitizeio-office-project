<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Income extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'income_name',
        'income_head',
        'amount',
        'income_textArea',
        'created_at',
        
    ];
}
