<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Size extends Model
{
    //

    protected $fillable = ['name'];

    /**
     * The products that belong to the size.
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)
            ->withPivot('is_available')
            ->withTimestamps();
    }

}
