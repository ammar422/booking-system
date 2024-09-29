@extends('layouts.master')
@section('content')
    @include('includes.header')


    {{-- start multi-steps form  navbar --}}
    <div class="formbold-main-wrapper">

        <div class="formbold-form-wrapper">
            <form action="" method="GET">
                @csrf
                @include('includes.multi-step_nav')

                @include('includes.step-three_summery_and_invoice')
            </form>
        </div>
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
