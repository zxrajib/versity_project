<?php

namespace App\Http\Controllers\Frontend\Registration;

use App\Http\Controllers\Controller;
use App\Mail\userverificationmail;
use App\Models\Customer;
use App\Models\User;
use App\Models\Vendor;
use App\Notifications\UserRegistration;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use PHPUnit\Util\Exception;

class RegistrationController extends Controller
{

    public function registration()
    {
        return view('frontend.login.registration');
    }

    public function registration_process(Request $request)
    {
        DB::beginTransaction();
        try {
            $custom_messages = [
                'name.required' => 'Name Required.',
                'phone.required' => 'Phone Required.',
                'user_name.required' => 'User Name Required.',
                'user_type.required' => 'User Type Required.',
                'password.required' => 'Password Required.',

            ];

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'phone' => 'required',
                'user_name' => 'required',
                'user_type' => 'required',
                'password' => 'required',
            ], $custom_messages);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $userData = [
                'uuid' => $this->uuid(),
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'user_name' => $request->user_name,
                'user_type' => $request->user_type,
                'password' => hash::make($request->password),
                'email_verification_token' => Str::random(32),
            ];
            $userStore = User::create($userData);

            if ($request->user_type == 'Vendor') {
                $mac=exec('getmac');
                $vendorData = [
                    'user_id' => $userStore->id,
                    'uuid' => $this->uuid(),
                    'ip_address' => $request->ip(),
                    'mac_address'=>$mac==''? 'linax': $mac,
                ];

                Vendor::create($vendorData);
            } else {
                $mac=exec('getmac');
                $customerData = [
                    'user_id' => $userStore->id,
                    'uuid' => $this->uuid(),
                    'ip_address' => $request->ip(),
                    'mac_address'=>$mac==''? 'linax': $mac,
                ];

                Customer::create($customerData);
            }

//            $userStore->notify( new UserRegistration($userStore));
            //        mail::to($userStore->email)->send(new userverificationmail($userStore));
            //        toastr()->success('Please check your mail for verification.');
            toastr()->success('Account Created Successfully.');

            DB::commit();
            return redirect()->route('home');
        } catch (\Exception $e) {
            DB::rollback();
            toastr()->warning('Something not working. Please try again.');
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function user_verify($token = null)
    {
        if ($token == null) {
            toastr()->warning('Something not working. Please try again.');

            return redirect()->route('home');
        }
        $user = User::where('email_verification_token', $token)->first();
        if ($user == null) {
            toastr()->warning('Something not working. Please try again.');

            return redirect()->route('home');
        }
        $user->update([
            'email_verified' => 1,
            'email_verified_at' => Carbon::now(),
            'email_verification_token' => '',
        ]);
        toastr()->success('Email verification is successful. Please Login now.');

        return redirect()->route('login');
    }

    public function welcomeMail()
    {
        return view('');
    }
}
