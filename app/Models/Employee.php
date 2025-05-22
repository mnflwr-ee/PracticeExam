<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee_tb_';
    protected $fillable = [
        'fname',
        'lname',
        'midname',
        'age',
        'address',
        'zip'
    ];
}
