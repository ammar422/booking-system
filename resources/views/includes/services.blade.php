 <!-- Services_area_start -->
 <div class="offers_area">
     <div class="container">
         <div class="row">
             <div class="col-xl-12">
                 <div class="section_title text-center mb-100">
                     <br>
                     <h3>{{ __('body.Our_Services') }}</h3>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-xl-6 col-md-6">
                 <div class="single_offers">
                     <div class="about_thumb">
                         <img src="assets/img/offers/4.png" alt="">
                     </div>
                     <h3> <strong> {{ __('body.new') }} </strong></h3>

                     <a href="{{ route('offer_new') }}" class="book_now">
                         <strong>
                             {{ __('body.Apply_now') }}
                         </strong>
                     </a>
                 </div>
             </div>
             <div class="col-xl-6 col-md-6">
                 <div class="single_offers">
                     <div class="about_thumb">
                         <img src="assets/img/offers/5.png" alt="">
                     </div>
                     <h3><strong>{{ __('body.inquiry') }}</strong></h3>

                     <a href="{{ route('offer_inquiry') }}" class="book_now">
                         <strong>
                             {{ __('body.inquiry_now') }}
                         </strong>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Services_area_end -->
