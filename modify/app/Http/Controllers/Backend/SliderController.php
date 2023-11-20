<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\ProductAds;
use App\Models\Slider;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }

    public function slider_list()
    {
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('backend.slider.index', compact('sliders'));
    }

    public function slider_store(Request $request)
    {
        try {
            $data = $request->validate([
                'title' => 'required|string|min:2|max:255',
                'description'=>'required|string',
                'button_text'=>'required|string',
                'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            ], [
                'title.required' => 'Please insert name.',
                'image.required' => 'Please insert an image.',
                'description.required' => 'Please type some description.',
                'button_text.required' => 'Please type some text.',
                'image.mimes' => 'Please select an image.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $title = $request->input('title');
        $photo = $request->file('image');
        $photo_name = 'slider_' . md5($title) . time() . '.' . $photo->getClientOriginalExtension();
        try {
            $photo->move(public_path('backend/img/slider'), $photo_name);
        } catch (Exception $e) {
            return redirect()->back();
        }

        $name = $request->input('name');
        $sliderData = Slider::create([
            'uuid' => $this->uuid(),
            'user_id' => Auth::user()->id,
            'title' => $title,
            'image' => $photo_name,
            'description' => $request->input('description'),
            'button_text' => $request->input('button_text'),
            'button_link' => $request->input('button_link'),
            'priority' => $request->input('priority'),

        ]);
        toastr()->success('Slider Added Successfully.', 'Active', ['timeOut' => 5000]);
        return redirect()->route('slider.list');


    }

    public function slider_update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'title' => 'required|string|min:2|max:255',
                'description'=>'required|string',
                'button_text'=>'required|string',
            ], [
                'title.required' => 'Please insert name.',
                'description.required' => 'Please type some description.',
                'button_text.required' => 'Please type some text.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $title = $request->input('title');
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
            $photo_name = 'category_' . md5($title) . time() . '.' . $photo->getClientOriginalExtension();
            try {
                $photo->move(public_path('backend/img/slider'), $photo_name);
            } catch (Exception $e) {
                return redirect()->back();
            }

        } else {
            $photo_name = $request->input('old_image');
        }
        $sliderData = Slider::where('id', $id)->update([
            'title' => $title,
            'image' => $photo_name,
            'description' => $request->input('description'),
            'button_text' => $request->input('button_text'),
            'button_link' => $request->input('button_link'),
            'priority' => $request->input('priority'),
        ]);
        toastr()->success('Slider Updated Successfully.', 'Active', ['timeOut' => 5000]);
        return redirect()->route('slider.list');


    }



    public function slider_active($id)
    {
        $sliderData = [
            'status' => 1,
        ];
        $sliderData = Slider::find($id)->update($sliderData);
        toastr()->success('Slider Active Successfully.', 'Active', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function slider_inactive($id)
    {
        $sliderData = [
            'status' => 0,
        ];
        $sliderData = Slider::find($id)->update($sliderData);
        toastr()->success('Slider Inactive Successfully.', 'Inactive', ['timeOut' => 5000]);
        return redirect()->back();
    }
}
