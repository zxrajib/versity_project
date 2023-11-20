<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Unit;
use App\Models\WebsiteControl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Exception;

class WebControlController extends Controller
{

    public function webControl_list(){
        $webControls= WebsiteControl::latest()->get();
        return view('backend.websitecontrol.index', compact('webControls'));

    }

    public function webControl_store(Request $request)
    {
//        dd($request->all());
        if ($request)
        {
            $name= "logo";
            $photo = $request->file('logo');
            $photo_name = 'logo_'.md5($name).time().'.'.$photo->getClientOriginalExtension();

            $type= "icon";
            $icon = $request->file('icon');
            $icon_name = 'icon_'.md5($type).time().'.'.$icon->getClientOriginalExtension();

            try {
                $photo->storeAs('backend/img/logo', $photo_name);
                $photo->storeAs('backend/img/icon', $icon_name);
            } catch (Exception $e) {
                return redirect()->back();
            }

            $webControlData = [
                'uuid' => $this->uuid(),
//                'user_id' => Auth::user()->id,
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone,
                'link' => $request->link,
                'logo' => $request->logo,
                'icon' => $request->icon,
            ];
            $webControl = WebsiteControl::create($webControlData);
            toastr()->success('Data has been saved successfully!');

        }


        return redirect()->back();

    }

}
