@extends('layouts.master')
@section('title', __('header.title'))
@section('content')


    {{-- <!-- bradcam_area_start -->
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
                <div id="modal" class="modal hidden">
                    <div class="modal-content">
                        <span class="close-button" id="closeModal">&times;</span>
                        <strong id="modalMessage">
                            If the data is entered incorrectly, the document will not be accepted. Do you
                            want to
                            continue?
                        </strong>
                        <button class="btn-alert" id="confirmButton">OK</button>
                        <button class="btn-alert" id="cancelButton">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- @foreach ($data as $item => $value)
        <ul>
            <li>{{ $item }} : {{ $value }}</li>
        </ul>
    @endforeach --}}

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
                        <form method="POST" action='{{ route('summary', $data['id']) }}'>
                            @csrf

                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.Visa_type') }}</strong>
                                    </label>
                                    <input type="text" disabled name="visa_type" value="Multi" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.visit_type') }}</strong>
                                    </label>
                                    <input type="text" name='visit_type' disabled value="Traffic" class="form-control">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.nationality') }}</strong>
                                    </label>
                                    <input type="text" value="{{ old('nationality') }}" name="nationality"
                                        class="form-control @error('nationality') is-invalid @enderror">
                                    @error('nationality')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.Passport') }}</strong>
                                    </label>
                                    <input type="text" disabled name="passport_num" value="{{ $data['passport_num'] }}"
                                        class="form-control">
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
                                    <input type="text" value="{{ old('border_number') }}" name="border_number"
                                        class="form-control @error('border_number') is-invalid @enderror">
                                    @error('border_number')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.expaire_date') }}</strong>
                                    </label>
                                    <input type="date" value="{{ old('visa_expaire_date') }}" name='visa_expaire_date'
                                        class="form-control @error('visa_expaire_date') is-invalid @enderror">
                                    @error('visa_expaire_date')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.Mobile_Number') }}</strong>
                                    </label>
                                    <input type="text" disabled value="{{ $data['mobile_num'] }}" name="mobile_num"
                                        class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.email') }}</strong>
                                    </label>
                                    <input type="email" value="{{ old('email') }}" name='email'
                                        class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.marital_status') }}</strong>
                                    </label>

                                    <select name="marital_status"
                                        class="form-control @error('marital_status') is-invalid @enderror">
                                        <option value="single">{{ __('body.Single') }}</option>
                                        <option value="married">{{ __('body.Married') }}</option>
                                    </select>
                                    @error('marital_status')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.city') }}</strong>
                                    </label>
                                    <input type="text" value="{{ old('city') }} "name='city'
                                        class="form-control @error('city') is-invalid @enderror">
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.birth_date') }}</strong>
                                    </label>
                                    <input type="date" value="{{ old('birth_date') }}" name='birth_date'
                                        class="form-control @error('birth_date') is-invalid @enderror">
                                    @error('birth_date')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
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
                                    <input type="text" name='mail_box' value="{{ old('mail_box') }}"
                                        class="form-control @error('mail_box') is-invalid @enderror">
                                    @error('mail_box')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.post_code') }}</strong>
                                    </label>
                                    <input type="text" name='post_code' value="{{ old('post_code') }}"
                                        class="form-control @error('post_code') is-invalid @enderror">
                                    @error('post_code')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>
                                        <strong>{{ __('body.address') }}</strong>
                                    </label>
                                    <textarea name="address" id="" cols="30" rows="10"
                                        class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror

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
    <script>
        // script.js  

        function showModal(message) {
            document.getElementById('modalMessage').innerText = message;
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

        window.onload = function() {
            // Set a timeout before showing the modal  

            setTimeout(function() {
                let message =
                    "إذا تم إدخال البيانات بشكل غير صحيح، فلن يتم قبول الوثيقة. هل تريد المتابعة؟,\nIf the data is entered incorrectly, the document will not be accepted. Do you want to continue?";

                showModal(
                    message
                );
            }, 500); // 2000 milliseconds = 2 seconds delay  
        };

        // Event listeners for buttons  
        document.getElementById('closeModal').addEventListener('click', closeModal);
        document.getElementById('confirmButton').addEventListener('click', function() {
            console.log('User acknowledged the alert.');
            closeModal();
        });
        document.getElementById('cancelButton').addEventListener('click', function() {
            console.log('User canceled the alert.');
            closeModal();
        });
    </script>

@endsection
