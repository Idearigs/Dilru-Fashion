<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    //
    protected $table = 'product_size';

    protected $fillable = ['product_id', 'size_id', 'is_available'];
}
