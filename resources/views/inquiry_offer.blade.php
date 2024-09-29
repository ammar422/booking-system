@extends('layouts.master')
@section('content')
    @include('includes.header')


    {{-- start multi-steps form  navbar --}}
    <div class="formbold-main-wrapper">
        <form method="POST" action="{{ route('offer_list') }}">
            @csrf
            <div class="formbold-input-flex">
                <div>
                    <label for="visa_num" class="formbold-form-label">
                        <strong>
                            رقم الوثيقة او عرض السعر
                        </strong>
                    </label>
                    <input type="text" name="visa_num" placeholder="رقم الوثيقة او عرض السعر" id="visa_num"
                        value="{{ old('visa_num') }}" class="formbold-form-input @error('visa_num') is-invalid @enderror" />
                    @error('visa_num')
                        <span class="invalid-feedback" role="alert">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="passport_num" class="formbold-form-label">
                        <strong>
                            رقم الجواز او رقم التأشيرة
                        </strong>
                    </label>
                    <input type="text" name="passport_or_visa_num" placeholder=" رقم جواز السفر او رقم التأشيرة"
                        id="passport_or_visa_num"
                        class="formbold-form-input @error('passport_or_visa_num') is-invalid @enderror"
                        value="{{ old('passport_or_visa_num') }}" />
                    @error('passport_or_visa_num')
                        <span class="invalid-feedback" role="alert">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="passport_num" class="formbold-form-label">
                        <strong>
                            رقم الجوال المسجل على الوثيقة
                        </strong>
                    </label>
                    <input type="text" name="mobile_num" placeholder="رقم الجوال المسجل على الوثيقة" id="mobile_num"
                        class="formbold-form-input @error('mobile_num') is-invalid @enderror"
                        value="{{ old('mobile_num') }}" />
                    @error('mobile_num')
                        <span class="invalid-feedback" role="alert">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                    @enderror
                </div>

            </div>
            <button class="btn-qu-submit" type="submit">
                Search
            </button>
        </form>
    </div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", sans-serif;
        }
    </style>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


    {{-- end multi-steps form  navbar --}}
@endsection
