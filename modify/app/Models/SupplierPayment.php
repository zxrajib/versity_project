<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierPayment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function supplierPayment()
    {
        return $this->hasOne(Supplier::class, 'id', 'supplier_id');

    }

}
