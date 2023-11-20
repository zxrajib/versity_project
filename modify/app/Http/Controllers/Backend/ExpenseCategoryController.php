<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\ExpenseCategory;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }

    public function expensecategory_list()
    {
        $expensecatData=ExpenseCategory::all();
        return view('backend.expensecategory.index', compact('expensecatData'));
    }

    public function expensecategory_store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|min:2|max:255',
                'description'=>'required|string',
            ], [
                'name.required' => 'Please Insert name.',
                'description.required' => 'Please type some details.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $expensecatData=[
            'uuid' => $this->uuid(),
            'user_id' => Auth::user()->id,
            'name'=>$request->name,
            'description'=>$request->description,
            'slug'=>strtolower($request->name),
        ];
        $expensecategory=ExpenseCategory::create($expensecatData);
        return redirect()->back();
    }
    public function expensecategory_update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|min:2|max:255',
                'description'=>'required|string',
            ], [
                'name.required' => 'Please Insert name.',
                'description.required' => 'Please type some details.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $expensecatData=[
            'user_id'=>1,
            'name'=>$request->name,
            'description'=>$request->description,
            'slug'=>strtolower($request->name),
        ];
        $expensecategory=ExpenseCategory::find($id)->update($expensecatData);
        return redirect()->back();
    }
    public function expensecategory_active($id)
    {
        $ExpensecategoryData = [
            'status' => 1,
        ];
        $ExpcategoryData = ExpenseCategory::find($id)->update($ExpensecategoryData);
        return redirect()->back();
    }

    public function expensecategory_inactive($id)
    {
        $ExpensecategoryData = [
            'status' => 0,
        ];
        $ExpcategoryData = ExpenseCategory::find($id)->update($ExpensecategoryData);
        return redirect()->back();
    }
}
