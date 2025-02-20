<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    //
    use HasFactory;

    protected $fillable = ['name', 'description', 'price' , 'status' , 'stock'];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
