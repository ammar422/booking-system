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
                <h3>{{ __('body.visa_beneficiaries_data') }}</h3>
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
                            <i class="fa fa-eye" aria-hidden="true"> </i>{{ __('body.visa_data') }}
                        </h2>


                        <i class="fas fa-hand-holding-usd"></i>
                        <strong>
                            {{ __('body.visa_data_label') }}
                        </strong>
                        <br>
                        <br>
                        <form method="POST" action='{{ route('summery') }}'>
                            @csrf

                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.Visa_type') }}</strong>
                                    </label>
                                    <input type="text" name="visa_type" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.visit_type') }}</strong>
                                    </label>
                                    <input type="text" name='visit_type' class="form-control">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.nationality') }}</strong>
                                    </label>
                                    <input type="text" name="nationality" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.Passport') }}</strong>
                                    </label>
                                    <input type="text" name="passport_num" class="form-control">
                                </div>
                            </div>

                            <h2 class="mb-30">
                                <i class="fa fa-eye" aria-hidden="true"> </i>{{ __('body.visa_additional_data') }}
                            </h2>
                            <i class="fas fa-hand-holding-usd"></i>
                            <strong>
                                {{ __('body.visa_additional_data_label') }}
                            </strong>
                            <br>
                            <br>

                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.border_number') }}</strong>
                                    </label>
                                    <input type="text" name="border_number" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.expaire_date') }}</strong>
                                    </label>
                                    <input type="date" name='visa_expaire_date' class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.Mobile_Number') }}</strong>
                                    </label>
                                    <input type="text" name="mobile_num" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.email') }}</strong>
                                    </label>
                                    <input type="email" name='email' class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.marital_status') }}</strong>
                                    </label>

                                    <select name="marital_status" class="form-control">
                                        <option value="single">{{ __('body.Single') }}</option>
                                        <option value="married">{{ __('body.Married') }}</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.city') }}</strong>
                                    </label>
                                    <input type="text" name='city' class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.renewal_period') }}</strong>
                                    </label>
                                    <select name="renewal_period" class="form-control">
                                        <option value="30">30</option>
                                        <option value="60">60</option>
                                        <option value="90">90</option>
                                        <option value="120">120</option>
                                        <option value="150">150</option>
                                        <option value="180">180</option>
                                        <option value="210">210</option>
                                        <option value="240">240</option>
                                        <option value="270">270</option>
                                        <option value="300">300</option>
                                        <option value="330">330</option>
                                        <option value="360">360</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.mail_box') }}</strong>
                                    </label>
                                    <input type="text" name='mail_box' class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.post_code') }}</strong>
                                    </label>
                                    <input type="text" name='post_code' class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.address') }}</strong>
                                    </label>
                                    <textarea name="address" id="" cols="30" rows="10"></textarea>

                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('body.confirm') }}</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Align Area -->





@endsection
