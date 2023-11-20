<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Supplier;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }

    public function supplier_list()
    {
        $suppliers = Supplier::with('countryData')->latest()->get();
        $countries = Country::all();

        return view('backend.supplier.index', compact('suppliers', 'countries'));
    }

    public function supplier_store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|min:2|max:255',
                'mail' => 'required|email',
                'phone' => 'required|string',
                'address' => 'required|string',
                'country' => 'required',
            ], [
                'name.required' => 'Please Insert name.',
                'mail.required' => 'Please enter a mail.',
                'phone.required' => 'Please type your number.',
                'address.required' => 'Please type address.',
                'country.required' => 'Please select a country.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }

        $supplierData = [
            'uuid' => $this->uuid(),
            'name' => $request->name,
            'email' => $request->mail,
            'phone' => $request->phone,
            'address' => $request->address,
            'country_id' => $request->country,
        ];

        $supplier = Supplier::create($supplierData);
        toastr()->success('Supplier Added Successfully', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function supplier_update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|min:2|max:255',
                'mail' => 'required|email',
                'phone' => 'required|string',
                'address' => 'required|string',
                'country' => 'required',
            ], [
                'name.required' => 'Please Insert name.',
                'mail.required' => 'Please enter a mail.',
                'phone.required' => 'Please type your number.',
                'address.required' => 'Please type address.',
                'country.required' => 'Please select a country.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }

        $supplierData = [
            'uuid' => $this->uuid(),
            'name' => $request->name,
            'email' => $request->mail,
            'phone' => $request->phone,
            'address' => $request->address,
            'country_id' => $request->country,
        ];
        $supplier = Supplier::find($id)->update($supplierData);
        toastr()->success('Supplier Updated Successfully', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function supplier_active($id)
    {
        $supplierData = [
            'status' => 1,
        ];
        $supplierData = Supplier::find($id)->update($supplierData);
        toastr()->success('Supplier Activated ', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function supplier_inactive($id)
    {
        $supplierData = [
            'status' => 0,
        ];

        $supplierData = Supplier::find($id)->update($supplierData);
        toastr()->success('Supplier Deactivated ', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }
}
