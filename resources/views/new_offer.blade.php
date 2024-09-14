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
                <h3>{{ __('body.new') }}</h3>
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
                            <i class="fa fa-eye" aria-hidden="true"> </i>{{ __('body.Query') }}
                        </h2>


                        <i class="fas fa-hand-holding-usd"></i>
                        <strong>
                            {{ __('body.visaQuery') }}
                        </strong>

                        <h4 class="mb-30">{{ __('body.Please_fill_the_following_data') }}</h4>

                        <form method="POST" action="{{ route('getBeneficiariesData') }}">
                            @csrf
                            <div class="form-group">
                                <label>
                                    <strong>
                                        {{ __('body.Visa_No') }}
                                    </strong>
                                </label>
                                <input type="text" name="visa_num" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>
                                    <strong>
                                        {{ __('body.Passport') }}
                                    </strong>
                                </label>
                                <input type="text" name='passport_num' class="form-control">

                            </div>
                            <div class="form-group">
                                <label>
                                    <strong>
                                        {{ __('body.Mobile_Number') }}
                                    </strong>
                                </label>
                                <input type="text" name="mobile_num" class="form-control">

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
