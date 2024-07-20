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
        'total_price',
        'shipment_date',
        'address',
        'city',
        'country',
        'method',
        'status',
        'product_id',
    ];
}
