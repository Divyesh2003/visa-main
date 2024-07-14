@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card p-4">
                    <h2>Visa Create</h2>
            <form name="visa" id="visa" class="needs-validation"
            action="{{ route('admin.visa.store') }}" method="POST"
        enctype="multipart/form-data" novalidate>
        @csrf()
        @method('POST')
        <div class="intro-y box p-1">
              <!-- START TAG -->
              <div class="input-form mt-3 @error('country_id') has-error @enderror">
                <label for="country_id" class="form-label">Country<span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                </label>
                <select class="js-example-basic-single form-select" name="country_id" required>
                   <option value="" selected>Select Country</option>
                   @foreach ($countries as $country)
                   <option value="{{ $country->id }}">{{ $country->name }}</option>
                   @endforeach
                </select>
                @error('country_id')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
            <!-- START TAG -->
            <div class="input-form mt-3 @error('title') has-error @enderror">
                <label for="title" class="form-label">Title<span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                    </label>
                <input name="title" id="title" value="{{ old('title') }}"
                    class="form-control slug-output" placeholder="enter Title">
                @error('title')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
            <!-- START TAG -->
            <div class="input-form mt-3 @error('processing_time') has-error @enderror">
                <label for="processing_time" class="form-label">Processing Time<span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                    </label>
                <input name="processing_time" id="processing_time" type="text" value="{{ old('processing_time') }}"
                    class="form-control slug-output" placeholder="enter Processing Time">
                @error('processing_time')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
            <!-- START TAG -->
            <div class="input-form mt-3 @error('stay_period') has-error @enderror">
                <label for="stay_period" class="form-label">Stay Period<span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                    </label>
                <input name="stay_period" id="stay_period" value="{{ old('stay_period') }}"
                    class="form-control slug-output" placeholder="enter slug" >
                @error('stay_period')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
              <!-- START TAG -->
            <div class="input-form mt-3 @error('validity') has-error @enderror">
                <label for="validity" class="form-label">Validity<span
                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                    </label>
                <input name="validity" id="validity" value="{{ old('validity') }}"
                    class="form-control slug-output" placeholder="enter slug" >
                @error('validity')
                <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                </div>
                @enderror
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- END TAG -->
                <!-- START TAG -->
                <div class="input-form mt-3 @error('visa_category') has-error @enderror">
                    <label for="visa_category" class="form-label">Visa Category<span
                            class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                        </label>
                    <input name="visa_category" id="visa_category" value="{{ old('visa_category') }}"
                        class="form-control slug-output" placeholder="enter slug" >
                    @error('visa_category')
                    <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                    </div>
                    @enderror
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <!-- END TAG -->
                  <!-- START TAG -->
                  <div class="input-form mt-3 @error('entry') has-error @enderror">
                    <label for="entry" class="form-label">Entry<span
                            class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span>
                        </label>
                    <input name="entry" id="entry" value="{{ old('entry') }}"
                        class="form-control slug-output" placeholder="enter slug" >
                    @error('entry')
                    <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                    </div>
                    @enderror
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <!-- END TAG -->
                 <!-- START TAG -->
                 <div class="input-form @error('popular') has-error @enderror">
                    <label class="form-label pt-2">Popular (Active / Deactive) <span
                            class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Optional,
                            prefered to select
                            Active</span></label>

                    <div class="form-check form-check-primary form-switch">
                        <input type="checkbox" checked="" value='1' name="popular" class="form-check-input" id="customSwitch3">
                    </div>
                    @error('popular')
                    <div class="pristine-error text-theme-24 mt-2">
                        {{ $message }}</div>
                    @enderror
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <!-- END TAG -->
            <!-- START TAG -->
            <div class="mt-5">
                <button type="submit" id="submit" name="submit"
                    class="btn btn-primary waves-effect waves-float waves-light">Save</button>
                <button type="reset" id="reset" name="reset"
                    class="btn btn-primary waves-effect waves-float waves-light">Reset</button>
                {{-- <a href="{{ route('admin.cms.blog.list.index') }}"
                    class="btn btn-primary waves-effect waves-float waves-light float-end">Back</a> --}}
            </div>
            <!-- END TAG -->
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
$(document).on('blur', '#description', function() {
    var myEditor = document.querySelector('#description')
var html = myEditor.children[0].innerHTML
console.log(html)
$("#descriptions_ce").val(html);
});
});
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
@endsection
