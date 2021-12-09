<?php

namespace App\Models;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Order extends Model
{
    use HasFactory;

    protected $table= 'orders';
    protected $fillabe = [
        'user_id',
        'fname',
        'lname',
        'email',
        'phone',
        'andress1',
        'andress2',
        'city',
        'state',
        'pincode',
        'total_price',
        'status',
        'message',
        'tracking_no',
    ];

    public function orderitems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
