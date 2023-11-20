<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockAttribute extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = true;
    protected $guarded = [];

    public function data_create($data)
    {
        return $this->create($data);
    }
    public function attr_value()
    {
        return $this->hasOne(AttributeValue::class, 'id', 'attr_id');

    }
}
