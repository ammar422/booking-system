<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function getBeneficiariesData(Request $request)
    {
        $data = $request->all();
        return view('Beneficiaries_data', ['data' => $data]);
    }


    public function summery(Request $request)
    {
        $data = $request->all();
        return view('summery', ['data' => $data]);
    }
}
