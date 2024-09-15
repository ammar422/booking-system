<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

protected $fillable =[
    'category',
    'max_age',
    'min_age',
    'monthly_cost'
];

}
