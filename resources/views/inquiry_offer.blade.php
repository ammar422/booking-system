@extends('layouts.master')
@section('title', __('header.title'))
@section('content')


 
    <br>
    <br>
    <div class="row">
        <div class="col-xl-12">
            <div class="section_title text-center mb-100">
                <br>
                <h3>{{ __('body.query_lable') }}</h3>
            </div>
        </div>
    </div>






    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-8 col-md-8">

                        <h2 class="mb-30">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            {{ __('body.Query') }}
                        </h2>


                        <form method="POST" action="{{ route('offer_list') }}">
                            @csrf
                            <div class="form-group">
                                <label>
                                    <strong>
                                        {{ __('body.Policy_Or_Quotation_No') }}
                                    </strong>
                                </label>
                                <input type="text" name="policy_or_quotation_num"
                                    value="{{ old('policy_or_quotation_num') }}"
                                    class="form-control @error('policy_or_quotation_num') is-invalid @enderror">
                                @error('policy_or_quotation_num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>
                                    <strong>
                                        {{ __('body.Passport_Or_Visa_No') }}
                                    </strong>
                                </label>
                                <input type="text" name='passport_or_visa_num' value="{{ old('passport_or_visa_num') }}"
                                    class="form-control @error('passport_or_visa_num') is-invalid @enderror">
                                @error('passport_or_visa_num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>
                                    <strong>
                                        {{ __('body.Mobile_number_policy') }}
                                    </strong>
                                </label>
                                <input type="text" name="mobile_num" value="{{ old('mobile_num') }}"
                                    class="form-control @error('mobile_num') is-invalid @enderror">
                                @error('mobile_num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Align Area -->



@endsection
