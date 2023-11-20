<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function single_user_cart()
    {
        $data = $this->where('user_id', Auth::id())->with(['user', 'product.image', 'stock_details.stock_attribute_data.attr_value'])->get();
        return $data;
    }
    public function find_exist_product_in_cart($column, $value)
    {
        $data = $this->where($column, $value)->first();
        return $data;
    }

    public function data_store($data)
    {
        $data = $this->create($data);
        return $data;
    }

    public function data_update($column, $value, $data)
    {
        $find_data = $this->find_exist_product_in_cart($column, $value);
        $data = $find_data->update($data);
        return $data;
    }

    public function data_remove($column, $value)
    {
        $remove_data = $this->find_exist_product_in_cart($column, $value);
        $data = $remove_data->delete();
        return $data;
    }

    public function cart_clear()
    {
        return $this->where('user_id', Auth::id())->delete();
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function stock_details()
    {
        return $this->hasOne(StockDetail::class, 'id', 'stock_details_id');
    }
}
