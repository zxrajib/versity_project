<?php

namespace App\Http\Controllers\Backend;

    use App\Http\Controllers\Controller;
    use App\Models\Supplier;
    use App\Models\SupplierPayment;
    use App\Models\SupplierPaymentDetail;
    use Dotenv\Exception\ValidationException;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class SupplierPaymentController extends Controller
    {
        public function supplierPayments()
        {
            $payments = SupplierPayment::with('supplierPayment')->latest()->get();
            $suppliers = Supplier::all();

            return view('backend.supplierpayment.index', compact('payments', 'suppliers'));
        }

        public function supplierChalanSearch(Request $request)
        {
            $s_chalans = SupplierPayment::where('supplier_id', $request->id)->get();

            return response()->json($s_chalans);
        }

        public function supplierPaymentSearch(Request $request)
        {
            $s_payments = SupplierPayment::where('chalan_no', $request->id)->first();

            return response()->json($s_payments);
        }

        public function dueAmountSearch(Request $request)
        {
            $s_payments = SupplierPayment::find($request->id);

            return response()->json($s_payments);
        }

        public function supplierPaymentStore(Request $request)
        {
            try {
                $data = $request->validate([
                    'supplier_id' => 'required',
                    'chalan_no' => 'required',
                    'purchase_amount' => 'required',
                    'payment_type' => 'required',
                    'pay_amount' => 'required',
                    'due_amount' => 'required',
                ], [
                    'supplier_id.required' => 'Please Insert name.',
                    'chalan_no.required' => 'Please Check the Chalan No',
                    'purchase_amount.required' => 'Please Check the Purchase Amount',
                    'payment_type.required' => 'Please Check the payment_type',
                    'pay_amount.required' => 'Please Check the pay_amount',
                    'due_amount.required' => 'Please Check the due_amount',
                ]);
            } catch (ValidationException $e) {
                return redirect()->back()->withErrors($e->validator)->withInput();
            }
            $supplierPaymentData = [
                'uuid' => $this->uuid(),
                'user_id' => Auth::user()->id,
                'supplier_id' => $request->supplier_id,
                'chalan_no' => $request->chalan_no,
                'purchase_amount' => $request->purchase_amount,
                'pay_amount' => $request->pay_amount,
                'due_amount' => $request->due_amount,
            ];
            $supplierPaymentCheck = SupplierPayment::where('supplier_id', $request->supplier_id)
                ->where('chalan_no', $request->chalan_no)->first();

            if ($supplierPaymentCheck != null) {
                $s_payments = SupplierPayment::where('id', $supplierPaymentCheck->id)->update($supplierPaymentData);
                toastr()->success('Payment Update Successfully', 'Success', ['timeOut' => 5000]);
            } else {
                $s_payments = SupplierPayment::create($supplierPaymentData);
                toastr()->success('Payment Save Successfully', 'Success', ['timeOut' => 5000]);
            }

            // $s_payments = SupplierPayment::updateOrCreate($supplierPaymentData);
            // toastr()->success('Payment Save Successfully', 'Success', ['timeOut' => 5000]);
//            dd($s_payments);
            $supplierPaymentDetails = [
                'uuid' => $this->uuid(),
                'payment_no' => $this->supplierPaymentNo(),
                'user_id' => Auth::user()->id,
                'chalan_no' => $request->chalan_no,
                'supplier_payment_id' => $s_payments,
                'payment_type' => $request->payment_type,
                'amount' => $request->pay_amount,
    ];
            SupplierPaymentDetail::create($supplierPaymentDetails);

            return redirect()->back();
        }
    }
