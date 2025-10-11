@extends('layouts.auth')
@section('title', 'Reset Password | ' . config('app.name'))

@section('content')
<div class="auth-page d-flex min-vh-100 align-items-center justify-content-center">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <!-- Login Form -->
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="auth-form w-100 p-4 p-md-5 shadow-deep" style="max-width: 420px; border-radius: 12px;">
          <h3 class="mb-4 text-center fw-semibold">Forgot Password</h3>
          <p>Enter your email address below and we'll send you a link to reset your password.</p>
          <form method="POST" action="{{ route('password.reset') }}">
            @csrf

            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input id="email" type="email" name="email" value="{{ old('email') }}" required
                class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email">
              @error('email')
              <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

        

            <!-- Submit -->
            <div class="d-grid">
              <button type="submit" class="btn btn-primary btn-lg">Continue</button>
            </div>

            <!-- Signup Link -->
            <div class="text-center mt-3">
              <p class="text-muted mb-0">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-decoration-none text-primary">Sign Up</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Toggle Password Script -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const togglePassword = document.querySelector(".toggle-password");
    const password = document.querySelector("#password");

    togglePassword.addEventListener("click", function () {
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);
      this.classList.toggle("fa-eye-slash");
    });
  });
</script>
@endsection
