<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Exception;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }

    public function category_list()
    {
        $categories = Category::latest()->get();

        return view('backend.category.index', compact('categories'));
    }

    public function category_store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|min:2|max:255',
                'description' => 'required|string',
                'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            ], [
                'name.required' => 'Please Insert name.',
                'image.required' => 'Please Insert an image',
                'description.required' => 'Please type some description',
                'image.mimes' => 'Please select an image.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $name = $request->input('name');
        $photo = $request->file('image');
        $photo_name = 'category_'.md5($name).time().'.'.$photo->getClientOriginalExtension();
        try {
            $photo->move(public_path('backend/img/category'), $photo_name);
        } catch (Exception $e) {
            return redirect()->back();
        }
        $categoryData = [
            'uuid' => $this->uuid(),
            'user_id' => Auth::user()->id,
            'name' => $name,
            'parent_id' => $request->input('parent_id'),
            'image' => $photo_name,
            'description' => $request->description,
            'slug' => strtolower($name),
        ];
        $categories = Category::create($categoryData);
        toastr()->success('Category Added Successfully', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function category_update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|min:3|max:255',
                'description' => 'required|string|min:3|max:255',
            ], [
                'name.required' => 'Please Insert name.',
                'description.required' => 'Please type some description.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $name = $request->input('name');
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
            $photo_name = 'category_'.md5($name).time().'.'.$photo->getClientOriginalExtension();
            try {
                $photo->move(public_path('backend/img/category'), $photo_name);
            } catch (Exception $e) {
                return redirect()->back();
            }
        } else {
            $photo_name = $request->input('old_image');
        }

        $categoryData = [
            'user_id' => 1,
            'name' => $name,
            'parent_id' => $request->input('parent_id'),
            'description' => $request->input('description'),
            'image' => $photo_name,
        ];
        $data = Category::find($id)->update($categoryData);

        return redirect()->back();
    }

    public function category_active($id)
    {
        $categoryData = [
            'status' => 1,
        ];
        $categoryData = Category::find($id)->update($categoryData);

        return redirect()->back();
    }

    public function category_inactive($id)
    {
        $categoryData = [
            'status' => 2,
        ];
        $categoryData = Category::find($id)->update($categoryData);

        return redirect()->back();
    }
}
