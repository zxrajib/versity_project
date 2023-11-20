<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AttributeValue;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttributeValueController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }

    public function attributevalue_list($id)
    {
        $attributevalues=AttributeValue::where('attribute_id',$id)->get();
//        dd($attributevalues);
        return view('backend.attributevalue.index', compact('attributevalues'));
    }

    public function attributevalue_store(Request $request, $id)
    {
        $attributevalues=[
            'uuid' => $this->uuid(),
            'attribute_id'=>$id,
            'value'=>$request->value_name
        ];
        $attributevalue=AttributeValue::create($attributevalues);
        return redirect()->back();
    }

    public function attributevalue_update(Request $request, $id)
    {
        $attributevalueUpdate=[
            'value'=>$request->value_name,
        ];
        $attributevaluestore=AttributeValue::find($id)->update($attributevalueUpdate);
        return redirect()->back();
    }
    public function attributevalue_active($id)
    {
        $attributevalueData = [
            'status' => 1,
        ];
        $attributeData = AttributeValue::find($id)->update($attributevalueData);
        return redirect()->back();
    }

    public function attributevalue_inactive($id)
    {
        $attributevalueData = [
            'status' => 0,
        ];
        $attributeData = AttributeValue::find($id)->update($attributevalueData);
        return redirect()->back();
    }
}
