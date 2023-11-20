<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Category;
use App\Models\Customer;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttributeController extends Controller
{
    //    public function __construct()
    //    {
    //        $this->middleware(['auth', 'auth.admin']);
    //    }


    public function attribute_list()
    {
        $attributes = Attribute::with('attrCategory', 'attrValue')->latest()->paginate(10);
        $categoryData = Category::whereStatus(1)->get();
        return view('backend.attribute.index', compact('attributes', 'categoryData'));
    }

    public function attribute_store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|min:3|max:255',
                'category_id' => 'required|numeric|min:1',
                'value' => 'required|string|min:1|max:255'
            ], [
                'category_id.required' => 'Please select a category type.'
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $attributeData = [
            'uuid' => $this->uuid(),
            'user_id' => Auth::user()->id,
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'slug' => strtolower($request->name),
        ];

        $attributes = Attribute::create($attributeData);

        $value = explode(',', ($request->value));
        foreach ($value as $data) {
            $attributeValueData[] = [
                'uuid' => $this->uuid(),
                'attribute_id' => $attributes->id,
                'value' => $data,
            ];
        }
        $attr_value = AttributeValue::insert($attributeValueData);
        toastr()->success('Attribute Added Successfully', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function attribute_update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|min:3|max:255',
                'category_id' => 'required|numeric|min:1',
                'value' => 'required|string|min:1|max:255'
            ], [
//                'name.min'=>'Please input a Valid Name',
                'category_id.required' => 'Please select a category type.'
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }

        $attributeData = [
            'user_id' => Auth::user()->id,
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'slug' => strtolower($request->name),
        ];
        $attributes = Attribute::find($id)->update($attributeData);
        toastr()->success('Attribute Updated Successfully', 'Success', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function attribute_active($id)
    {
        $attributeData = [
            'status' => 1,
        ];
        $attributeData = Attribute::find($id)->update($attributeData);
        toastr()->success('Attribute Active Successfully', 'Success', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function attribute_inactive($id)
    {
        $attributeData = [
            'status' => 2,
        ];
        $attributeData = Attribute::find($id)->update($attributeData);
        toastr()->success('Attribute Inactive Successfully', 'Success', ['timeOut' => 5000]);
        return redirect()->back();
    }


}
