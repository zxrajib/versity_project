<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\UserReviews;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Exception;

class UserReviewController extends Controller
{
    public function review_list()
    {
        try{
            $reviews = UserReviews::with('user', 'product')->paginate(20);
            return view('backend.review.index', compact('reviews'));
        } catch (\Exception $exception) {

        }
    }
    public function review(Request $request)
    {
        try {
            $request->validate([
                'rating' => 'required',
            ], [
                'rating.required' => 'Please give rating.',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        $product = Product::where('uuid', $request->product_id )->first();

        $create_data = [
            'uuid' => $this->uuid(),
            'user_id' => (int)$request->user_id,
            'product_id' => $product->id,
            'rating' => (int)$request->rating,
            'comments' => $request->comments ?? '',
        ];
        UserReviews::create($create_data);
        toastr()->success('Review Submitted Successfully', 'Success', ['timeOut' => 5000]);

        return redirect()->back();
    }

    public function review_remove($uuid)
    {
        $find_data = UserReviews::where('uuid', $uuid)->first();
        if ($find_data){
            $find_data->delete();
        }
        return redirect()->route('review.list');
    }
}
