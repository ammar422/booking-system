<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Requests\OfferRequest;
use App\Http\Requests\SummaryRequest;
use App\Models\Price;
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
        $data = $request->validated();
        $age = $this->calculateAge($request->birth_date);
        $total = $this->calculateCost($age, $request->renewal_period);
        $data['total_price'] = $total;
        $offer->update($data);
        $data = $offer->toArray();
        $data['age'] = $age;
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


    private function calculateAge($dateOfBirth)
    {
        // Create a Carbon instance from the date of birth  
        $dob = Carbon::parse($dateOfBirth);

        // Get today's date  
        $today = Carbon::now();

        // Calculate age in years  
        $age = $today->diffInYears($dob);

        return ceil(abs($age));
    }

    private function calculateCost($age, $period)
    {

        $period_in_months = ceil($period / 30);


        $price = Price::where('min_age', '<=', $age)
            ->where('max_age', '>=', $age)
            ->first();


        if ($price) {

            $totalCost = $price->monthly_cost * $period_in_months;

            return $totalCost;
        }

        return 0;
    }
}
