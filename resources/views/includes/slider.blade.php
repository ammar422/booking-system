  <!-- slider_area_start -->
  <div class="slider_area">
      <div class="slider_active owl-carousel">
          <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                          <div class="slider_text text-center">
                              {{-- <p>{{ __('slider.company_name') }}</p> --}}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="single_slider d-flex align-items-center justify-content-center slider_bg_2">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                          <div class="slider_text text-center">
                              <h3>{{ __('header.newOffer') }}</h3>
                              <a href="{{ route('offer_new') }}">
                                  <p>{{ __('header.newOffer_description') }}</p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_3">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                          <div class="slider_text text-center">
                              <h3>{{ __('header.Inquiry') }}</h3>
                              <a href="{{ route('offer_inquiry') }}">
                                  <p>{{ __('header.inquiry_description') }}</p>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- slider_area_end -->
