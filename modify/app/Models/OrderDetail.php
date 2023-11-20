<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = "order_details";

    protected $guarded = [];

    public function data_insert($data)
    {
        $insert_data = $this->insert($data);
        return $insert_data;
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'order_id', 'id');
    }

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
