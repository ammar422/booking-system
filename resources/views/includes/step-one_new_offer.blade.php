 {{-- start step 1 --}}
 <div class="formbold-form-step-1 active">
     <div class="formbold-input-flex">
         <div>
             <label for="visa_num" class="formbold-form-label">
                 <strong>
                     رقم التأشيرة
                 </strong>
             </label>
             <input type="text" name="visa_num" placeholder="رقم التاشيرة" id="visa_num" value="{{ old('visa_num') }}"
                 class="formbold-form-input @error('visa_num') is-invalid @enderror" />
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
                     رقم جواز السفر
                 </strong>
             </label>
             <input type="text" name="passport_num" placeholder="رقم جواز السفر" id="passport_num"
                 class="formbold-form-input @error('passport_num') is-invalid @enderror"
                 value="{{ old('passport_num') }}" />
             @error('passport_num')
                 <span class="invalid-feedback" role="alert">
                     <strong>
                         {{ $message }}
                     </strong>
                 </span>
             @enderror
         </div>
     </div>

     <div class="formbold-input-flex">
         <div>
             <label for="mobile_num" class="formbold-form-label">
                 <strong>
                     رقم الجوال
                 </strong>
             </label>
             <input type="text" placeholder="رقم الجوال" name="mobile_num" id="dob"
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
 </div>
 {{-- end step 1 --}}
