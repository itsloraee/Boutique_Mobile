<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    //
    use HasFactory;
    protected $table='categories';
    protected $fillable=['category id' , 'name' , 'name' , 'description' , 'price'];
    /**
     * Get all of the products for the category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(product::class);
    }
}
