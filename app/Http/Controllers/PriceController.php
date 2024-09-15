<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PriceController extends Controller
{

    public function editPrice(Price $price)
    {
        return view('edit_price', compact('price'));
    }



    public function updatePrice(Request $request, Price $price)
    {
        $validator = Validator::make($request->all(), [
            'price' => ['required', 'numeric']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $new = $price->update(['monthly_cost' => $request->price]);

        if ($new) {
            session()->flash('success', 'successfully edited');
            return to_route('dashboard');
        }
    }
}
