<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeHead extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'emp_name',
        'emp_place',
        'emp_join',
        'emp_amount',
        
        'created_at'
    ];
   
}
