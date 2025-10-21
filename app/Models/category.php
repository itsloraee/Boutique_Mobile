<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    //
    use HasFactory;
    protected $table='categories';
    protected $fillable=['category id' , 'name' , 'name' , 'description' , 'price'];
}
