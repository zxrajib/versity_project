<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function data_store($data)
    {
        $data = $this->create($data);
        return $data;
    }

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');

    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
}
