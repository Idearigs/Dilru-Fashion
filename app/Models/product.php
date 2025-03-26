<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class product extends Model
{
    //
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'status', 'stock', 'sizes'];


    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function sizes(): BelongsToMany
    {
        return $this->belongsToMany(Size::class)
            ->withPivot('is_available')
            ->withTimestamps();
    }
}
