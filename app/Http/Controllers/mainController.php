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


    public function getSummery(Offer $offer)
    {
        $data = $offer;
        return view('summmery_and_invoice', compact('data'));
    }

    public function createSummary(SummaryRequest $request)
    {
        $offer = Offer::where("visa_num", $request->visa_num)->first();
        if ($offer) {
            return redirect()->route('getSummery', $offer);
        } else {

            $data = $request->validated();
            $age = $this->calculateAge($request->birth_date);
            $total = $this->calculateCost($age, $request->renewal_period);
            $data['total_price'] = $total;
            $offer = Offer::insertGetId($data);
            $data = Offer::find($offer);
            $data['age'] = $age;
            return redirect()->route('getSummery', $offer);
        }
    }




    public function OfferList(Request $request)
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
        return redirect()->route("get_offer_list",$offer->id);
        // return view('offer_list', compact('offer'));
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



    public function getInsuranceDocuments()
    {
        $offers = Offer::all();
        return view('all_Insurance_documents', compact('offers'));
    }


    public function editDocumentsStatus(offer $offer)
    {
        return view('edit_offer_status', compact('offer'));
    }



    public function updateDocumentsStatus(Offer $offer, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'guarantee_board_status' => ['required', 'in:Acceptable,Rejected,Pending']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $new = $offer->update([
            'guarantee_board_status' => $request->guarantee_board_status,
        ]);
        if ($offer->guarantee_board_status == 'Acceptable') {
            $offer->update([
                'document_status' => 'active',
            ]);
        }

        if ($new) {
            session()->flash('success', 'successfully edited');
            return to_route('dashboard');
        }
    }
}
