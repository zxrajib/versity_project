<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stock extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;
    protected $guarded = [];

    public function stock_list($id)
    {
        return $this->with('stockDetails.stock_attribute_data.attr_value', 'product.unit')
            ->where('user_id', $id)
            ->orderBy('total_in', 'DESC')
            ->get();
    }

    public function data_create($data)
    {
        $create_data = $this->create($data);

        return $create_data;
    }

    public function data_update($id, $data)
    {
        return $this->find($id)->update($data);
    }

    public function data_show($id)
    {
        return $this->where('id', $id)->with('stockDetails', 'product')->first();
    }

    public function product_find($id)
    {
        return $this->where('product_id', $id)->with('stockDetails', 'product')->first();
    }

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function stockDetails()
    {
        return $this->hasMany(StockDetail::class, 'stock_id', 'id');
    }
}
