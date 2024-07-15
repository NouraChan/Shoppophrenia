<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'user_id',
        'user_img',
        'serial key',
        'role',
        'gender',
        'fullname',
        'address',
        'phone_number',
        'birthday',

    ];

    public function User()
{
    return $this->belongsTo(User::class, 'user_id', 'id');
}
}
