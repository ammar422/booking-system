@extends('layouts.master')
@section('title', __('header.title'))
@section('content')


    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        {{-- <h3>{{ __('body.new') }}</h3> --}}
    </div>
    <!-- bradcam_area_end -->



    <br>
    <br>
    <div class="row">
        <div class="col-xl-12">
            <div class="section_title text-center mb-100">
                <br>
                <h3>{{ __('body.summery') }}</h3>
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
                            {{ __('body.price_offer') }}
                        </h2>


                        <i class="fas fa-hand-holding-usd"></i>
                        <strong>
                            {{ __('body.price_offer_label') }}
                        </strong>
                        <br>
                        <br>

                        {{-- @foreach ($data as $item => $value)
                            <ul>
                                <li>{{ $item }} : {{ $value }}</li>
                            </ul>
                        @endforeach --}}

                        <ul class="inline-list">
                            <li><strong>{{ __('body.offer_number') }}:</strong> 123456789</li>
                            <li><strong>{{ __('body.Visa_type') }}:</strong> john.doe@example.com</li>
                            <li><strong>{{ __('body.nationality') }}:</strong> 30</li>
                            <li><strong>{{ __('body.visit_type') }}:</strong> Jane Smith</li>
                            <li><strong>{{ __('body.Passport') }}:</strong> 213654</li>
                            <li><strong>{{ __('body.visa_beneficiaries_num') }}:</strong> 25</li>
                            <li><strong>{{ __('body.offer_expaire_date') }}:</strong> 25</li>
                            <li><strong>{{ __('body.document_status') }}:</strong> 25</li>
                            <li><strong>{{ __('body.Visa_No') }}:</strong> 25</li>
                        </ul>


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
                                    <td>1990 SAR</td>
                                </tr>
                            </tbody>
                        </table>
                        <form action="">
                            <button type="submit" class="btn btn-success full-width-button">{{ __('body.pay') }}</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Align Area -->


@endsection
