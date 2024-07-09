<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;
    protected $table = "shipment";
    protected $fillable = [
        "shipment_date",
        "address",
        "city",
        "country",
        "customer_id"
    ];
}
