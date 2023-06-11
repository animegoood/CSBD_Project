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

          <div class="mb-3">
              <label for="code" class="form-label">{{ __('Code') }}</label>
              <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" autofocus>

              @error('code')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

          <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="recovery_code_checkbox" name="recovery_code_checkbox">
              <label class="form-check-label" for="recovery_code_checkbox">
                  {{ __('Use Recovery Code') }}
              </label>
          </div>

          <div id="recovery_code_input" class="mb-3" style="display: none;">
              <label for="recovery_code" class="form-label">{{ __('Recovery Code') }}</label>
              <input id="recovery_code" type="text" class="form-control @error('recovery_code') is-invalid @enderror" name="recovery_code" autofocus>

              @error('recovery_code')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

          <button type="submit" class="btn btn-primary">
              {{ __('Verify') }}
          </button>
      </form>
      </div>



    <!-- / Two Steps Verification -->


    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      const recoveryCodeCheckbox = document.getElementById('recovery_code_checkbox');
      const recoveryCodeInput = document.getElementById('recovery_code_input');

      recoveryCodeCheckbox.addEventListener('change', function() {
          if (recoveryCodeCheckbox.checked) {
              recoveryCodeInput.style.display = 'block';
          } else {
              recoveryCodeInput.style.display = 'none';
          }
      });
  });
</script>
@endsection
