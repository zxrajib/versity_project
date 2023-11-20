<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function find_all_data()
    {
        return $this->orderBy('status', 'ASC')->get();
    }

    public function find_existing_single_data($column, $value)
    {
        $data = $this->where($column, $value)->first();
        return $data;
    }

    public function find_existing_data($column, $value)
    {
        $data = $this->where($column, $value)->get();
        return $data;
    }

    public function data_update($column, $value, $data)
    {
        $update = $this->where($column, $value)->update($data);
        return $update;

    }
}
