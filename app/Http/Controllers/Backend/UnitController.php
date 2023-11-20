<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Customer;
use App\Models\Unit;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnitController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }
    public function unit_list()
    {
        $units = Unit::latest()->get();
        return view('backend.unit.index', compact('units'));
    }


    public function unit_store(Request $request)
    {

        try {
            $data = $request->validate([
                'name' => 'required|alpha|min:2|max:255',

            ], [
                'name.required' => 'Please Insert a unit name',
                'name.alpha' => 'Unit Only Contains Letter',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }



        if ($request)
        {
            $unitData = [
                'uuid' => $this->uuid(),
                'user_id' => Auth::user()->id,
                'name' => $request->name,


            ];
            $unit = Unit::create($unitData);
            toast()->success('Data has been saved successfully!');

        }


        return redirect()->back();
    }

    public function unit_update(Request $request, $id)
    {

        try {
            $data = $request->validate([
                'name' => 'required|alpha|min:2|max:255',

            ], [
                'name.required' => 'Please Insert a unit name',
                'name.alpha' => 'Unit Only Contains Letter',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }


        $unitData = [
            'user_id' => Auth::user()->id,
            'name' => $request->name,

        ];
        $data = Unit::find($id)->update($unitData);
        return redirect()->back();
    }

    public function unit_active($id)
    {
        $unitData = [
            'status' => 1,
        ];
        $unitData = Unit::find($id)->update($unitData);
        return redirect()->back();
    }

    public function unit_inactive($id)
    {
        $unitData = [
            'status' => 2,
        ];
        $unitData = Unit::find($id)->update($unitData);
        return redirect()->back();
    }


}
