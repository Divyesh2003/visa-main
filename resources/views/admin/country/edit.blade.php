@extends('admin.layouts.app')
@section('title', __('admin.edit') . ' ' . __('admin.category'))
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card p-4">
                                <div class='card-header pb-0'>
                                    <h4 class='card-title'>Country Edit</h4>
                                </div>
                                <hr class="invoice-spacing" />
                                {{-- @dd($country) --}}
                                <div class='card-body pt-0'>
                                    <form name='country' id='country' class='validate-form1 needs-validation'
                                        action='{{ route('admin.country.update', $country->id ) }}' method='POST'
                                        enctype='multipart/form-data' novalidate>
                                        @csrf()
                                        @method('PUT')
                                        <div class='input-form mb-1 @error('name') has-error @enderror'>
                                            <label class='form-label' for='name'>Name <span
                                                    class='danger'>*</span>
                                            </label>
                                            <input type='text' id='name' name='name'
                                                class='form-control' value='{{ $country->name }}'
                                                placeholder='{{ __('admin.hello') }}'
                                                autofocus required> @error('name')
                                                <div class='pristine-error text-theme-24 mt-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                            <div class="invalid-feedback">{{ __('admin.please fill out this field.') }}
                                            </div>
                                        </div>
                                        <div class='input-form mb-1 @error('slug') has-error @enderror'>
                                            <label class='form-label' for='slug'>Slug <span
                                                    class='danger'>*</span>
                                            </label>
                                            <input type='text' id='slug' name='slug'
                                                class='form-control ' value='{{ $country->slug }}'
                                                placeholder='{{ __('admin.hello') }}'pattern='[a-z0-9\\d]+(?:-[a-z0-9\\d]+)*'
                                                required> @error('slug')
                                                <div class='pristine-error text-theme-24 mt-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                            <div class="invalid-feedback">
                                                {{ __('admin.please fill out this field.[a-z0-9-]') }}</div>
                                        </div>
                                        <div class='input-form mb-1 @error('continent') has-error @enderror'>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Continent</label>
                                                <input type='text' id='continent' name='continent'
                                                class='form-control ' value='{{ $country->continent }}'
                                                placeholder='{{ __('admin.hello') }}'pattern='[a-z0-9\\d]+(?:-[a-z0-9\\d]+)*'
                                                required>
                                              </div>
                                            @error('description')
                                                <div class='pristine-error text-theme-24 mb-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class='input-form mb-1 @error('description') has-error @enderror'>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <input type='text' id='description' name='description'
                                                class='form-control ' value='{{ $country->description }}'
                                                placeholder='{{ __('admin.hello') }}'pattern='[a-z0-9\\d]+(?:-[a-z0-9\\d]+)*'
                                                required>
                                              </div>
                                            @error('description')
                                                <div class='pristine-error text-theme-24 mb-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class='input-form mb-1 @error('sortdescription') has-error @enderror'>
                                            <div class="mb-3">
                                                <label for="sortdescription" class="form-label">Sort Description</label>
                                                <input type='text' id='sortdescription' name='sortdescription'
                                                class='form-control ' value='{{ $country->sortdescription }}'
                                                placeholder='{{ __('admin.hello') }}'pattern='[a-z0-9\\d]+(?:-[a-z0-9\\d]+)*'
                                                required>
                                              </div>
                                            @error('sortdescription')
                                                <div class='pristine-error text-theme-24 mb-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                         <!-- START TAG -->
                                         <div class='input-form mb-1 @error('image') has-error @enderror'>
                                            <label class='form-label' for='image'>Image</label>
                                            <input type='file' id='image' name='image' class='form-control' >
                                            @error('image')
                                                <div class='pristine-error text-theme-24 '>{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- END TAG -->
                                         <!-- START TAG -->
                                        <div class="input-form mt-3 @error('flag') has-error @enderror">
                                            <label for="flag" class="form-label">Flag <span
                                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span></label>
                                            <input id="flag" type="file" name="flag" class="form-control">
                                            @error('flag')
                                            <div class="pristine-error text-theme-24 mt-2">{{ $message }}
                                            </div>
                                            @enderror
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out this field.</div>
                                        </div>
                                        <!-- END TAG -->
                                        <div class='input-form mb-1 @error('meta_title') has-error @enderror'>
                                            <label class='form-label' for='meta_title'>Meta Title
                                            </label>
                                            <input type='text' id='meta_title' name='meta_title'
                                                class='form-control' value='{{ $country->meta_title }}'
                                                placeholder='{{ __('admin.title') }}' />
                                            @error('meta_title')
                                                <div class='pristine-error text-theme-24 mt-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class='input-form mb-1  @error('meta_description') has-error @enderror'>
                                            <label class='d-block form-label'
                                                for='meta_description'>Meta Descriptioin</label>
                                            <textarea id='meta_description' name='meta_description' class='form-control'
                                                placeholder='{{ __('admin.description') }}' rows='3'> {{ $country->meta_description }}
                                                </textarea>
                                            @error('meta_description')
                                                <div class='pristine-error text-theme-24 mb-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class='input-form mb-1 @error('meta_keywords') has-error @enderror'>
                                            <label class='form-label' for='meta_keywords'>Meta Keywords</label>
                                            <input type='text' id='meta_keywords' name='meta_keywords'
                                                class='form-control' value='{{ $country->meta_keywords }}'
                                                placeholder='{{ __('admin.keywords') }}' />
                                            @error('meta_keywords')
                                                <div class='pristine-error text-theme-24 mt-2'>
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mt-5">
                                            <button type="submit" id="submit" name="submit"
                                                class="btn btn-primary waves-effect waves-float waves-light">Save</button>
                                            <button type="reset" id="reset" name="reset"
                                                class="btn btn-primary waves-effect waves-float waves-light">Reset</button>
                                        </div>
                                    </form>
                                </div>
                               
                            </div>
                        </div>
                        <div class='col-md-4 col-12'>
                            <div class="card">
                                <div class="card-body sideimg" style="background: #d1d1d1">
                                    <img src="{{ asset($country->image) }}" alt="">
                                    <img src="{{ asset($country->flag) }}" alt="">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
@endsection
