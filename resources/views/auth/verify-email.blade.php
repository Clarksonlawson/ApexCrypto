@extends('layouts.auth')

@section('title', 'Verify Email | ApexCrypto Finance LTD')

@section('content')
<div class="auth-page d-flex min-vh-100 align-items-center justify-content-center bg-light">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <!-- Verification Notice -->
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="auth-form w-100 p-4 p-md-5 bg-white rounded-4 shadow-sm" style="max-width: 420px;">
          <h4 class="mb-4 text-center fw-semibold">Verify Your Email Address</h4>

          @if (session('message'))
          <div class="alert alert-success" role="alert">
            {{ session('message') }}
          </div>
          @endif

          <p class="mb-4 text-center">A verification link has been sent to your email address. Please check your email and click on the link to verify your account.</p>

          <form method="POST" action="{{ route('verification.send') }}" class="text-center">
            @csrf
            <button type="submit" class="btn btn-info w-100 mb-3">
              Resend Verification Email
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection