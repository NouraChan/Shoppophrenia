<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "order";
    protected $fillable = [
        "total_price",
        "customer_id",
        'shipment_date',
        'address',
        'city',
        'country',
        'method',
        'status',
    ];

    public function orderItem(){
        return $this->hasMany(Order_item::class, 'order_id' ,'id');
    }

    public function orderItems(){
        return $this->belongsToMany(Product::class, 'product_id')->withPivot(['quantity','price']);
    }
}
