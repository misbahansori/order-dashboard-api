<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    /**
     * Get the relation of the user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the relation of the product
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
