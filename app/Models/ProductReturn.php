<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReturn extends Model
{
    use HasFactory;

    protected $guarded= [

    ];

    public function supplier()
    {
        return $this->hasOne(Supplier::class,'id', 'supplier_id');
    }

    public function stockDetails()
    {
        return $this->hasOne(StockDetail::class, 'id', 'stock_details_id');
    }
}
