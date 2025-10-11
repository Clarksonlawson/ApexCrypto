@extends('layouts.auth')

@section('title', 'Register | ApexCrypto Finance LTD')

@section('content')
<div class="auth-page d-flex min-vh-100 align-items-center justify-content-center">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <!-- Registration Form -->
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="auth-form w-100 p-4 p-md-5" style="max-width: 420px;">
          <h3 class="mb-4 text-center fw-semibold">Signup</h3>

          <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                class="form-control @error('name') is-invalid @enderror" placeholder="Enter your full name">
              @error('name')
              <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input id="email" type="email" name="email" value="{{ old('email') }}" required
                class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email">
              @error('email')
              <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input id="password" type="password" name="password" required
                class="form-control @error('password') is-invalid @enderror" placeholder="Enter password">
              @error('password')
              <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
              <label for="password_confirmation" class="form-label">Confirm Password</label>
              <input id="password_confirmation" type="password" name="password_confirmation" required
                class="form-control" placeholder="Confirm your password">
            </div>

            <!-- Submit -->
            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg">Register</button>
            </div>

            <!-- Login Link -->
            <div class="text-center mt-3">
              <p class="text-muted mb-0">
                Already have an account?
                <a href="{{ route('login') }}" class="text-decoration-none text-primary">Log in</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
