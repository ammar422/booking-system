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
    <div class="container-fluid">
        <div class="table-responsive">
            @if ($offer)
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">{{ __('body.Policy_Or_Quotation_No') }}</th>
                            <th scope="col">{{ __('body.Visa_No') }}</th>
                            <th scope="col">{{ __('body.Passport') }}</th>
                            <th scope="col">{{ __('body.document_status') }}</th>
                            <th scope="col">{{ __('body.guarantee_board_status') }}</th>
                            <th scope="col">{{ __('body.operations') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $offer->id }}</td>
                            <td>{{ $offer->visa_num }}</td>
                            <td>{{ $offer->passport_num }}</td>
                            <td>{{ $offer->document_status }}</td>
                            <td>{{ $offer->guarantee_board_status }}</td>
                            <td>
                                <a class="btn btn-outline-success btn-sm" role="button"
                                    href="{{ route('document_data', $offer->id) }}">
                                    <i class="fas fa-eye"></i>&nbsp;{{ __('body.show') }}
                                </a>
                                <a class="btn btn-outline-info btn-sm" role="button" href="#download_file">
                                    <i class="fas fa-download"></i>&nbsp;{{ __('body.download') }}
                                </a>
                                <a class="btn btn-outline-danger btn-sm" data-toggle="modal" href="#delete_file">
                                    <i class="fas fa-trash"></i>&nbsp;{{ __('body.delete') }}
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    <!-- End Align Area -->

@endsection
