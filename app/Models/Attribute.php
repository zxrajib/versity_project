<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function attrValue()
    {
        return $this->hasMany(AttributeValue::class, 'attribute_id', 'id');
    }

    public function attrCategory()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function attrList()
    {
        return $this->with('attrValue', 'attrCategory')->get();
    }
}
