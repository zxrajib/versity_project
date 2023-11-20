<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Footer;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Exception;

class FooterController extends Controller
{
    public function footer_list()
    {
        $footer_contents = Footer::latest()->get();
        return view('backend.websitecontrol.footer', compact('footer_contents'));

    }

    public function footer_store(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|min:2|max:255',
                'phone' => 'string|min:2|max:255',
                'address' => 'string|min:2',
            ], [
                'email.required' => 'Please Insert content left.',
                'phone.required' => 'Please Insert content left.',
                'address.required' => 'Please Insert Copy Right left.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $photo = $request->file('image');
        $photo_name = 'logo_'.md5('logo').time().'.'.$photo->getClientOriginalExtension();
        try {
            $photo->move(public_path('backend/img/logo'), $photo_name);
        } catch (Exception $e) {
            return redirect()->back();
        }
        $check_before_data = Footer::whereStatus(1)->first();
        if ($check_before_data){
            $check_before_data->update(['status'=>0]);
        }
        $footerData = [
            'uuid' => $this->uuid(),
            'user_id' => Auth::id(),
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'fb_link' => $request->fb_link,
            'tw_link' => $request->tw_link,
            'google_link' => $request->google_link,
            'insta_link' => $request->insta_link,
            'youtube_link' => $request->youtube_link,
            'image' => $photo_name,
        ];
        Footer::create($footerData);
        toastr()->success('Footer Content Added Successfully', 'Success', ['timeOut' => 5000]);
        return redirect()->back();
    }

    public function footer_update(Request $request, $uuid)
    {

        try {
            $request->validate([
                'email' => 'required|string|min:2|max:255',
                'phone' => 'string|min:2|max:255',
                'address' => 'string|min:2',
            ], [
                'email.required' => 'Please Insert content left.',
                'phone.required' => 'Please Insert content left.',
                'address.required' => 'Please Insert Copy Right left.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $photo = $request->file('image');

        if ($photo !== null) {
            $photo_name = 'logo_'.md5('logo').time().'.'.$photo->getClientOriginalExtension();
            try {
                $photo->move(public_path('backend/img/logo'), $photo_name);
            } catch (Exception $e) {
                return redirect()->back();
            }
        } else {
            $photo_name = $request->input('old_image');
        }

        $footerData = [
            'user_id' => Auth::id(),
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'fb_link' => $request->fb_link,
            'tw_link' => $request->tw_link,
            'google_link' => $request->google_link,
            'insta_link' => $request->insta_link,
            'youtube_link' => $request->youtube_link,
            'image' => $photo_name,
        ];

        $data = Footer::where('uuid', $uuid)->update($footerData);

        toastr()->success('Footer Content Updated Successfully', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function status($uuid)
    {
        $find_existing = Footer::where('uuid', $uuid)->first();
        if ($find_existing){
            Footer::whereStatus(1)->first()->update(['status'=>0]);
            $find_existing->update(['status'=>1]);
            toastr()->success('Status Change Successfully', 'Success', ['timeOut' => 5000]);
        } else{
            toastr()->error('Something went wrong', 'Error', ['timeOut' => 5000]);
        }
        return redirect()->back();
    }


}
