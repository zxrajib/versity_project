<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Charge;
use App\Models\Customer;
use App\Models\Discount;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChargeController extends Controller
{
    public $charge;
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
        $this->charge = new Charge();
    }

    public function charge_list()
    {
        $charges = $this->charge->find_all_data();
        return view('backend.charge.index', compact('charges'));
    }

    public function charge_store(Request $request)
    {
        try {
            $data = $request->validate([
                'charge_in_city' => 'required|numeric|max:255',
                'charge_around_city' => 'required|numeric|max:255',
            ], [
                'charge_in_city.required' => 'Please Insert an amount.',
                'charge_around_city.required' => 'Please Insert an amount.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $chargeData = [
            'uuid' => $this->uuid(),
            'delivery_charge_in_city' => $request->charge_in_city,
            'delivery_charge_around_city' => $request->charge_around_city,
        ];
        Charge::create($chargeData);
        return redirect()->back();
    }

    public function charge_update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'charge_in_city' => 'required|numeric|max:255',
                'charge_around_city' => 'required|numeric|max:255',
            ], [
                'charge_in_city.required' => 'Please Insert an amount.',
                'charge_around_city.required' => 'Please Insert an amount.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $chargeData = [
            'delivery_charge_in_city' => $request->charge_in_city,
            'delivery_charge_around_city' => $request->charge_around_city,
        ];
        $charge = Charge::find($id)->update($chargeData);
        return redirect()->back();
    }

    public function charge_active($id)
    {
        $chargeData = [
            'status' => 1,
        ];
        $chargeData = Charge::find($id)->update($chargeData);
        return redirect()->back();
    }

    public function charge_inactive($id)
    {
        $chargeData = [
            'status' => 0,
        ];

        $chargeData = Charge::find($id)->update($chargeData);
        return redirect()->back();
    }

}
