<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = true;
    protected $guarded = [];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function vendor()
    {
        return $this->hasOne(Vendor::class, 'id', 'vendor_id');
    }

    public function brand()
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }

    public function unit()
    {
        return $this->hasOne(Unit::class, 'id', 'unit_id');
    }

    public function purchase()
    {
        return $this->hasMany(Purchase::class, 'product_id', 'id');
    }

    public function stock()
    {
        return $this->hasOne(Stock::class, 'product_id', 'id');
    }

    public function discount()
    {
        return $this->hasOne(Discount::class, 'id', 'discount_id');
    }
/*    public function image()
    {
        return $this->belongsToMany(ProductImage::class);
    }*/
    public function image()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function stock_product()
    {
        return $this->hasOne(Stock::class, 'product_id','id');
    }

}
