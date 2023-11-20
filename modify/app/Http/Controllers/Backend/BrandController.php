<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Customer;
use App\Models\TemporaryImage;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Exception;

class BrandController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(['auth', 'auth.admin']);
//    }

    public function brand_list()
    {
        $brands = Brand::latest()->paginate(10);

        return view('backend.brand.index', compact('brands'));
    }

    public function brand_store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|min:2|max:255',
                'description' => 'required|string',
                'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            ], [
                'name.required' => 'Please Insert name.',
                'image.required' => 'Please Insert an image.',
                'description.required' => 'Please type some description.',
                'image.mimes' => 'Please select an image.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }

//        $temporaryFile = TemporaryImage::where('folder', $request->avatar)->first();

        $name = $request->input('name');
        $photo = $request->file('image');
        $photo_name = 'brand_' . md5($name) . time() . '.' . $photo->getClientOriginalExtension();
        try {
            $photo->move(public_path('backend/img/brand'), $photo_name);
        } catch (Exception $e) {
            return redirect()->back();
        }

        $brandData = [
            'uuid' => $this->uuid(),
            'user_id' => Auth::user()->id,
            'name' => $name,
            'image' => $photo_name,
            'description' => $request->description,
            'slug' => strtolower($request->name),
        ];

        $brands = Brand::create($brandData);
        toastr()->success('Brand Added Successfully', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function brand_update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|min:2|max:255',
                'description' => 'required|string|min:3|max:255',
            ], [
                'name.required' => 'Please Insert name.',
                'description.required' => 'Please type some description.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $name = $request->input('name');
        $prevImage = $request->old_image;
        $photo = $request->file('image');
        if ($photo !== null) {
            try {
                $data = $request->validate([
                    'image' => 'mimes:jpeg,jpg,png,gif|max:10000',
                ], [
                    'image.mimes' => 'Please select an image.',
                ]);
            } catch (ValidationException $e) {
                return redirect()->back()->withErrors($e->validator)->withInput();
            }
            if (isset($prevImage)) {

                if (file_exists(public_path('backend/img/brand/') . $prevImage))
                {
                    unlink(public_path('backend/img/brand/') . $prevImage);
                }
            }
            $photo_name = 'brand_' . md5($name) . time() . '.' . $photo->getClientOriginalExtension();
            try {
                $photo->move(public_path('backend/img/brand'), $photo_name);
            } catch (Exception $e) {
                return redirect()->back();
            }
        } else {
            $photo_name = $request->input('old_image');
        }

        $brandData = [
            'user_id' => Auth::user()->id,
            'name' => $name,
            'image' => $photo_name,
            'description' => $request->input('description'),
        ];
        $data = Brand::find($id)->update($brandData);
        toastr()->success('Brand Updated Successfully', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function brand_status(Request $request, $id)
    {
        $brand = Brand::find($id);
        $updatedData = $brand->update(['status' => ($brand->status == 0 ? 1 : 0)]);
        if ($updatedData) {
            $latestData = Brand::find($id);

            return response()->json($latestData);
        } else {
            return 'FAILED';
        }
    }

    public function brand_active($id)
    {
        $brandData = [
            'status' => 1,
        ];
        $brandData = Brand::find($id)->update($brandData);
        toastr()->success('Brand Activated Successfully', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function brand_inactive($id)
    {
        $brandData = [
            'status' => 2,
        ];
        $brandData = Brand::find($id)->update($brandData);
        toastr()->success('Brand Deactivated Successfully', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }


}
