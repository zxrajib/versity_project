<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockDetail extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = true;
    protected $guarded = [];

    public function data_create($data)
    {
        return $this->create($data);
    }

    public function data_update($id, $data)
    {
        return $this->find($id)->update($data);
    }

    public function data_show($id)
    {
        return $this->find($id);
    }

    public function stock()
    {
        return $this->hasOne(Stock::class, 'id', 'stock_id');
    }

    public function stock_attribute_data()
    {
        return $this->hasMany(StockAttribute::class, 'stock_details_id', 'id');
    }

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function supplier()
    {
        return $this->hasOne(Supplier::class, 'id', 'supplier_id');
    }


}
