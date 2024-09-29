  {{-- start step 2 --}}
  <div class="formbold-form-step-2">
      <div class="row">
          <div class="col-lg-8 col-md-8">

              <h2 class="mb-30">
                  {{ __('body.visa_data') }}
              </h2>


              <i class="fas fa-hand-holding-usd"></i>
              <strong>
                  {{ __('body.visa_data_label') }}
              </strong>
              <br>
              <br>
              <div class="form-row">
                  <div class="form-group">
                      <label>
                          <strong>{{ __('body.Visa_type') }}</strong>
                      </label>
                      <input type="text" disabled name="visa_type" value="Multi" class="formbold-form-input">
                  </div>

                  <div class="form-group">
                      <label>
                          <strong>{{ __('body.visit_type') }}</strong>
                      </label>
                      <input type="text" name='visit_type' disabled value="Traffic" class="formbold-form-input">
                  </div>
              </div>

              <div class="form-row">
                  <div class="form-group">
                      <label>
                          <strong>{{ __('body.nationality') }}</strong>
                      </label>
                      <input type="text" value="{{ old('nationality') }}" name="nationality"
                          class="formbold-form-input @error('nationality') is-invalid @enderror">
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
                      <input type="text"  name="passport_num" value="{{ old("passport_num") }}" class="formbold-form-input">
                  </div>
              </div>

              <h2 class="mb-30">
                 {{ __('body.visa_additional_data') }}
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
                          class="formbold-form-input @error('border_number') is-invalid @enderror">
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
                          class="formbold-form-input @error('visa_expaire_date') is-invalid @enderror">
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
                      <input type="text"  value="{{ old("mobile_num") }}" name="mobile_num" class="formbold-form-input">
                  </div>

                  <div class="form-group">
                      <label>
                          <strong>{{ __('body.email') }}</strong>
                      </label>
                      <input type="email" value="{{ old('email') }}" name='email'
                          class="formbold-form-input @error('email') is-invalid @enderror">
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

                      <select name="marital_status" class="formbold-form-input @error('marital_status') is-invalid @enderror">
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
                          class="formbold-form-input @error('city') is-invalid @enderror">
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
                          class="formbold-form-input @error('birth_date') is-invalid @enderror">
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
                      <select name="renewal_period" class="formbold-form-input">
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
                          class="formbold-form-input @error('mail_box') is-invalid @enderror">
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
                          class="formbold-form-input @error('post_code') is-invalid @enderror">
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
                          class="formbold-form-input @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                      @error('address')
                          <span class="invalid-feedback" role="alert">
                              {{ $message }}
                          </span>
                      @enderror

                  </div>
              </div>
          </div>

      </div>
  </div>
  {{-- end step 2 --}}
