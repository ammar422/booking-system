<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Requests\OfferRequest;
use App\Http\Requests\SummaryRequest;

class mainController extends Controller
{
    public function getBeneficiariesData(OfferRequest $request)
    {

        $offer = Offer::firstOrCreate(
            ['visa_num' => $request->visa_num],
            [
                'visa_num' => $request->visa_num,
                'passport_num' => $request->passport_num,
                'mobile_num' => $request->mobile_num,
            ]
        );

        $data = $offer->toArray();
        return view('Beneficiaries_data', compact('data'));
    }



    public function createSummary(Offer $offer, SummaryRequest $request)
    {
        $offer->update($request->validated());
        $data = $offer->toArray();
        return view('summery', compact('data'));
    }
}
