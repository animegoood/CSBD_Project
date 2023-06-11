@php
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Two Steps Verifications Basic - Pages')

@section('vendor-style')
<!-- Vendor -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-auth.js')}}"></script>
<script src="{{asset('assets/js/pages-auth-two-steps.js')}}"></script>
@endsection

@section('content')
<div class="authentication-wrapper authentication-basic px-4">
  <div class="authentication-inner py-4">
    <!--  Two Steps Verification -->
    <div class="card">
      <div class="card-body">
        <!-- Logo -->
        <div class="app-brand justify-content-center mb-4 mt-2">
          <a href="{{url('/')}}" class="app-brand-link gap-2">
            <span class="app-brand-logo demo">@include('_partials.macros',['height'=>20,'withbg' => "fill: #fff;"])</span>
            <span class="app-brand-text demo text-body fw-bold ms-1">{{ config('variables.templateName') }}</span>
          </a>
        </div>
        <!-- /Logo -->
        <h4 class="mb-1 pt-2">Two Step Verification For QR Code 💬</h4>
        <br>

        <form method="POST" action="{{ route('two-factor.login') }}">
          @csrf

          <div class="row mb-3">
              <label for="code" class="col-md-4 col-form-label text-md-end">{{ __('QR Code') }}</label>

              <div class="col-md-6">
                  <input id="code" type="code" class="form-control @error('code') is-invalid @enderror" name="code" required autocomplete="current-code">

                  @error('code')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="row mb-0">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Submit') }}
                  </button>

              </div>
          </div>
      </form>


      <br>
      <div>

        <a href="{{ route('recovery_code_login') }}">Click for Recovery code login</a>
      </div>


      </div>



    <!-- / Two Steps Verification -->

    <br>


      <div class="card-body">

        <h4 class="mb-1 pt-2">Two Step Verification For Recovery Code 💬</h4>
        <br>
        <form method="POST" action="{{ route('two-factor.login') }}">
          @csrf

          <div class="row mb-3">
              <label for="recovery_code" class="col-md-4 col-form-label text-md-end">{{ __('Recovery Code') }}</label>

              <div class="col-md-6">
                  <input id="recovery_code" type="recovery_code" class="form-control @error('recovery_code') is-invalid @enderror" name="recovery_code" required autocomplete="current-recovery_code">

                  @error('recovery_code')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="row mb-0">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Submit') }}
                  </button>

              </div>
          </div>
      </form>

      </div>
    </div>
    <!-- / Two Steps Verification -->
  </div>
</div>
@endsection
