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


                    <ul class="inline-list">
                        <li class="li-inline-list"><strong>{{ __('body.offer_number') }}:</strong> {{ $data['id'] }}</li>
                        <li class="li-inline-list"><strong>{{ __('body.Visa_type') }}:</strong> {{ $data['visa_type'] }}</li>
                        <li class="li-inline-list"><strong>{{ __('body.nationality') }}:</strong> {{ $data['nationality'] }}</li>
                        <li class="li-inline-list"><strong>{{ __('body.visit_type') }}:</strong> {{ $data['visit_type'] }}</li>
                        <li class="li-inline-list"><strong>{{ __('body.Passport') }}:</strong> {{ $data['passport_num'] }}</li>
                        <li class="li-inline-list"><strong>تاريخ الميلاد:</strong>{{ $data['birth_date'] }}</li>
                        <li class="li-inline-list"><strong>{{ __('body.visa_beneficiaries_num') }}:</strong>
                            {{ $data['visa_beneficiaries_num'] }}</li>
                        <li class="li-inline-list"><strong>{{ __('body.offer_expaire_date') }}:</strong>
                            {{ \Carbon\Carbon::today()->addDays(10) }}
                        </li>
                        <li class="li-inline-list"><strong>{{ __('body.document_status') }}:</strong> {{ $data['document_status'] }}</li>
                        <li class="li-inline-list"><strong>{{ __('body.Visa_No') }}:</strong> {{ $data['visa_num'] }}</li>
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
                                <td>{{ $data['total_price'] }}SAR</td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="" action="">
                        
                        <button type="submit"  class="btn-pay btn-success full-width-button">
                            <i class="fas fa-credit-card"></i>
                            {{ __('body.pay') }}
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Align Area -->