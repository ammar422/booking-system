@extends('layouts.master')
@section('title', __('header.title'))
@section('content')



    <br>
    <br>
    <div class="row">
        <div class="col-xl-12">
            <div class="section_title text-center mb-100">
                <br>
                <h3>{{ __('body.document_data') }}</h3>
            </div>
        </div>
    </div>

    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-12 col-md-12">

                        <h2 class="mb-30">
                            <i class="fa fa-file-text" aria-hidden="true"></i>
                            {{ __('body.quotation_offer') }}
                        </h2>


                        <i class="fas fa-hand-holding-usd"></i>
                        <strong>
                            {{ __('body.quotation_offer_label') }}
                        </strong>
                        <br>
                        <br>


                        <div class="offer-details">
                            <h2>{{ __('body.quotation_offer') }}</h2>
                            <ul>
                                <li><strong>{{ __('body.offer_number') }}</strong> {{ $offer->id }}</li>
                                <li><strong>{{ __('body.Visa_type') }}</strong> {{ $offer->visa_type }}</li>
                                <li><strong>{{ __('body.nationality') }}</strong> {{ $offer->nationality }}</li>
                                <li><strong>{{ __('body.visit_type') }}</strong> {{ $offer->visit_type }}</li>
                                <li><strong>{{ __('body.Passport') }}</strong> {{ $offer->passport_num }}</li>
                                <li><strong>{{ __('body.visa_beneficiaries_num') }}</strong>
                                    {{ $offer->visa_beneficiaries_num }}</li>
                                <li><strong>{{ __('body.offer_expaire_date') }}</strong>
                                    {{ \Carbon\Carbon::today()->addDays(10)->format('Y-m-d') }}</li>
                                <li><strong>{{ __('body.document_status') }}</strong> {{ $offer->document_status }}</li>
                                <li><strong>{{ __('body.Visa_No') }}</strong> {{ $offer->visa_num }}</li>
                                <li><strong>{{ __('body.guarantee_board_status') }}</strong>
                                    {{ $offer->guarantee_board_status }}</li>
                            </ul>
                        </div>

                        <h2 class="mb-30">
                            <i class="fas fa-file-invoice"></i>{{ __('body.invoice') }}
                        </h2>

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">{{ __('body.invoice_item') }}</th>
                                    <th scope="col">{{ __('body.invoice_price') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ __('body.invoice_total') }}</td>
                                    <td>{{ $offer->total_price }}SAR</td>
                                </tr>
                            </tbody>
                        </table>
                        <form action="">
                            <button type="submit" class="btn btn-warning full-width-button"><i
                                    class="fas fa-download"></i>{{ __('body.download') }}</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Align Area -->



@endsection
