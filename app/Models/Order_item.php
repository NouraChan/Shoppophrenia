<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    use HasFactory;

    protected $table = "order_items";
    protected $fillable = [
        "product_id",
        "order_id",
        'quantity',
        'price',
        'total_price',
    ];

    public function productLink(){

        return $this->belongsTo(Product::class);
    }

    public function orderLink(){
        return $this->belongsTo(Order::class);
    }
}
