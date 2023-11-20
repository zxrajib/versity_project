<?php

namespace App\Http\Controllers\Frontend\Login;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function login()
    {
        return view('frontend.login.login');
    }

    public function login_process(Request $request)
    {
        $this->validate($request, [
            'login' => 'required',
            'password' => 'required',
        ]);

        $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'phone';

        $request->merge([
            $login_type => $request->input('login')
        ]);

        $credentials = $request->only($login_type, 'password');

        if (Auth::attempt($credentials)) {
            $userData = Auth::user();
            if ($userData->user_type == 'Admin') {
                toastr()->success('Welcome To Admin Panel');
                return redirect()->route('dashboard');
            } else {
//                if ($userData->email_verified==0){
//                    toastr()->warning('Please go to your email & Verify your account first.');
//                    Auth::logout();
//                    return redirect()->route('login');
//                }
                if ($userData->user_type == 'Vendor') {
                    toastr()->success('Wellcome');

                    return Redirect::route('dashboard');
                } else {
                    toastr()->success('Wellcome');

                    return redirect()->route('home');
                }
            }
        } else {
            toastr()->error('Invalid Credential', 'Warning', ['timeOut' => 3000]);
            return redirect()->route('home');
        }
    }

    public function login_modal_process(Request $request)
    {
        $this->validate($request, [
            'login' => 'required',
            'password' => 'required',
        ]);

        $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'phone';

        $request->merge([
            $login_type => $request->input('login')
        ]);

        $credentials = $request->only($login_type, 'password');

        if (Auth::attempt($credentials)) {
            $userData = Auth::user();

            if ($userData->user_type == 'Admin') {
                toastr()->success('Welcome To Admin Panel');
                return redirect()->route('dashboard');
            } else {
//                if ($userData->email_verified==0){
//                    toastr()->warning('Please go to your email & Verify your account first.');
//                    Auth::logout();
//                    return redirect()->route('login');
//                }
                if ($userData->user_type == 'Vendor') {
                    toastr()->success('Wellcome');

                    return Redirect::route('dashboard');
                } else {
                    toastr()->success('Welcome');

                    return back();
                }
            }
        } else {
            toastr()->error('Invalid Credential', 'Warning', ['timeOut' => 3000]);
            return redirect()->route('home');
        }
    }

    public function logout()
    {
        Auth::logout();
        toastr()->info('Thanks for being with us.');
        return redirect()->route('home');

    }

    public function getEmail()
    {
        return view('frontend.login.forgot');
    }

    public function password_reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $token = Str::random(60);
        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );
        Mail::send('frontend.login.verify', ['token' => $token], function ($message) use ($request) {
//            $message->from($request->email);
            $message->from('kazirabbiinfo@gmail.com');
            $message->to($request->email);
            $message->Subject('Reset Password');
        });

        return back()->with('message', 'Please Check you Mail');

    }

    //Google Login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    //Google CallBack
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $this->_registerOrLoginUser($user);
        return redirect()->route('home');
    }

    //Google Login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    //Google CallBack
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $this->_registerOrLoginUser($user);
        return redirect()->route('home');
    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', $data->email)->first();
        if (!$user) {
            DB::beginTransaction();
            try {
                $info = [
                    'uuid' => $this->uuid(),
                    'name' => $data->name,
                    'email' => $data->email,
                    'provider_id' => $data->id,
                    'avatar' => $data->avatar,
                ];
                $insert = User::create($info);
                $InfoForCustomer = [
                    'uuid' => $this->uuid(),
                    'user_id' => $insert->id,
                    'name' => $data->name,
                    'email' => $data->email,
                    'image' => $data->avatar,
                ];
                $insertInCustomer = Customer::create($InfoForCustomer);

                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();
                toastr()->error('Something Goes Wrong');
                return redirect()->back();
            }

            toastr()->success('Account Created Successfully.');
            return redirect()->route('home');

        }
        Auth::login($user);
    }


    public function username()
    {
        return phone;
    }


}
