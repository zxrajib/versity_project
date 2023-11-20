<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }
    public function expense_list()
    {
        $expenseData=Expense::all();
        $expenseCategories=ExpenseCategory::all();
        return view('backend.expense.index', compact('expenseData','expenseCategories'));
    }

    public function expense_store(Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|min:2|max:255',
                'expense_category_id'=>'required',
                'details'=>'required|string',
                'reference'=>'required|string',
                'amount'=>'required|number',
                'date'=>'required|date',
            ], [
                'name.required' => 'Please Insert name.',
                'expense_category_id.required' => 'Please select a expense category.',
                'details.required' => 'Please type some details.',
                'reference.required' => 'Please type some reference.',
                'amount.required' => 'Please enter some amount.',
                'date.required' => 'Please enter a date.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $expenseData=[
            'uuid' => $this->uuid(),
            'user_id' => Auth::user()->id,
            'expense_category_id'=>$request->expense_category_id,
            'name'=>$request->name,
            'details'=>$request->details,
            'amount'=>$request->amount,
            'date'=>$request->date,
            'reference'=>$request->reference
        ];
        $expense=Expense::create($expenseData);
//        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
    }
    public function expense_update(Request $request, $id)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|min:2|max:255',
                'expense_category_id'=>'required',
                'details'=>'required|string',
                'reference'=>'required|string',
                'amount'=>'required|number',
                'date'=>'required|date',
            ], [
                'name.required' => 'Please Insert name.',
                'expense_category_id.required' => 'Please select a expense category.',
                'details.required' => 'Please type some details.',
                'reference.required' => 'Please type some reference.',
                'amount.required' => 'Please enter some amount.',
                'date.required' => 'Please enter a date.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $expenseData=[
            'user_id'=>1,
            'expense_category_id'=>1,
            'name'=>$request->name,
            'details'=>$request->details,
            'amount'=>$request->amount,
            'date'=>$request->date,
            'reference'=>$request->reference
        ];
        $expense=Expense::find($id)->update($expenseData);
        return redirect()->back();
    }
}
