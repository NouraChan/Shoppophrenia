<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = "wishlists";
    protected $fillable = [
        'title',
        'description',
        "customer_id",
        "product_id"
    ];
}
