<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];
    use HasFactory;


    public function attribute()
    {
        return $this->hasMany(Attribute::class,'category_id','id');
    }

    public function child()
    {
        return $this->hasMany(Category::class, 'parent_id')->with('child');
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }


}
