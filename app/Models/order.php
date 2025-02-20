<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class order extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'full_name', 'last_name', 'country', 'town',
        'postcode', 'email', 'phone', 'street_address',
        'additional_note', 'status'
    ];

    public function orderItems()
    {
        return $this->hasMany(orderDetails::class);
    }
}
