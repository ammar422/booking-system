<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Requests\OfferRequest;
use App\Http\Requests\SummaryRequest;
use Illuminate\Support\Facades\Validator;

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

    public function getOfferList(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'passport_or_visa_num' => ['required', 'exists:offers,visa_num']
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $offer = Offer::where('visa_num', $request->passport_or_visa_num)->first();
        return view('offer_list', compact('offer'));
    }


    public function getDocumentData(Offer $offer)
    {
        return view('document_data', compact('offer'));
    }
}
