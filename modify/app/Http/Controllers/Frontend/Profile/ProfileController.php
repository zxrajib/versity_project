<?php

namespace App\Http\Controllers\Frontend\Profile;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use PHPUnit\Exception;

class ProfileController extends Controller
{
    public function profile_index()
    {
        $userId=Auth::user();
        $customerData=Customer::where('user_id', $userId->id)->first();
        $orders=Order::where('user_id', $userId->id)
            ->where('status', 0)
            ->orWhere('status', 2)
            ->get();
        $orders=Order::with('orderDetail.product.unit')->where('user_id', $userId->id)
            ->where('status', 0)
            ->orWhere('status', 1)
            ->orWhere('status', 2)
            ->latest()
            ->get();
        $cancelledOrders=Order::with('orderDetail.product.unit')->where('user_id', $userId->id)
            ->where('status', 3)
            ->latest()
            ->get();
        return view($userId->role == 0 ? 'frontend.profile.index' : 'backend.profile.index' ,compact('customerData','orders', 'cancelledOrders'));

    }

    public function user_order_update(Request $request, $id)
    {
        $data=[
            'status'=>$request->status,
        ];
        $updateData=Order::where('id', $id)->update($data);
        toastr()->info('Your order has been cancelled.');
        return redirect()->back();
    }

    public function profile_info_update(Request $request, $id)
    {
        $userData=User::where('id', $id)->first();
        if($userData->role==0){

            try {
                $this->validate($request,[
                    'name'=>'required|string|min:3|max:50',
                    'phone'=>'required|string|min:10|max:11',
                    'shipping_address'=>'required|string|min:3|max:255',
//                'billing_address'=>'required|string|min:3|max:255',
                ],[
                    'name.required'=>'Please input a name.',
                    'phone.required'=>'Please input a name.',
                    'phone.min'=>'Phone no is too short.',
                    'phone.max'=>'Phone no is too long.',
                    'shipping_address.required'=>'Please provide a shipping address.',
//                'billing_address.required'=>'Please provide a billing address.',
                ]);
            }catch(ValidationException $e){
                return redirect()->back()->withErrors($e->validator)->withInput();
            }
            $customerDataUpdate=[
                'name'=>$request->input('name'),
                'phone'=>$request->input('phone'),
                'shipping_address'=>$request->input('shipping_address'),
//            'billing_address'=>$request->input('billing_address'),
            ];
            $userDataUpdate=[
                'name'=>$request->input('name'),
                'phone'=>$request->input('phone'),
                'address'=>$request->input('shipping_address'),
            ];
            $updateData=Customer::where('user_id',$id)->update($customerDataUpdate);
            $updateData=User::find($id)->update($userDataUpdate);
            toastr()->success('Profile updated successfully.');
            return redirect()->back();
        }else{
            try {
                $this->validate($request,[
                    'name'=>'required|string|min:3|max:50',
                    'phone'=>'required|string|min:11|max:11',
                ],[
                    'name.required'=>'Please input a name.',
                    'phone.required'=>'Please input a name.',
                    'phone.min'=>'Phone no is too short.',
                    'phone.max'=>'Phone no is too long.',
                ]);
            }catch(ValidationException $e){
                return redirect()->back()->withErrors($e->validator)->withInput();
            }

            $customerDataUpdate=[
                'name'=>$request->input('name'),
                'phone'=>$request->input('phone'),
            ];
            $userDataUpdate=[
                'name'=>$request->input('name'),
                'phone'=>$request->input('phone'),
            ];

            $updateData=Customer::where('user_id',$id)->update($customerDataUpdate);
            $updateData=User::find($id)->update($userDataUpdate);
            toastr()->success('Profile updated successfully.');
            return redirect()->back();
        }

    }

    public function profile_password_update(Request $request, $id)
    {

        $storedPassword=Auth::user()->password;
        $old_password=$request['old_password'];

        try {

            $this->validate($request,[
                'old_password'=>'required|min:6|',
                'password'=>'required|confirmed|min:6'
            ],
                [
                'old_password.required'=>'Please provide your current password.',
                'old_password.min'=>'Your current password is too short.',
                'password.required'=>'Please type your new password.',
                'password.min'=>'Your new password is too short.',
                'password.confirmed'=>'Please re-type your password carefully.',
            ]);
//                        dd($request->all());
        }catch(ValidationException $e){
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
//        dd($request->all());
        if (password_verify($old_password,$storedPassword)){
            $passwordUpdate=[
                'password'=>Hash::make($request->password),
            ];
            $updateData=User::find($id)->update($passwordUpdate);
            $updateData=Customer::where('user_id', $id)->update($passwordUpdate);
            toastr()->success('Password updated successfully.');
            return redirect()->back();
        }else{
            toastr()->error('Current password Not matched. Enter your current password correctly.');
            return redirect()->back();
        }


    }

    public function profile_photo_update(Request $request, $id)
    {
        $photo = $request->file('image');
        if (file_exists($photo)) {
            $customerData = Customer::where('user_id', $id)->first();
            $prevImage = $customerData->image;
            $title = $customerData->name;
            if (isset($prevImage)) {
                unlink(public_path('frontend/img/profile/') . $prevImage);
            }
            $photo_name = 'profile_' . md5($title) . time() . '.' . $photo->getClientOriginalExtension();
            try {
                $photo->move(public_path('frontend/img/profile'), $photo_name);
                $customerDataUpdate=[
                  'image'=>$photo_name,
                ];
                Customer::where('user_id', $id)->update($customerDataUpdate);
                toastr()->success('Photo successfully updated.');
                return redirect()->back();
            } catch (Exception $e) {
                toastr()->warning('Photo was not updated. Try again');
                return redirect()->back();
            }
        }
    }
}
