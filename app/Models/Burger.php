<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Burger extends Model
{
    use HasFactory;
    protected $table = 'burger';
    protected $casts = ['toppings'=> 'array'];
    
}
