@extends('layouts.auth')

@section('title', 'Register | ApexCrypto Finance LTD')

@section('content')
<div class="auth-page d-flex min-vh-100 align-items-center justify-content-center bg-light">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <!-- Registration Form -->
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="auth-form w-100 p-4 p-md-5 bg-white rounded-4 shadow-sm" style="max-width: 420px;">
          <h4 class="mb-4 text-center fw-semibold">Log In</h4>

          <form method="POST" action="{{ route('login') }}">
            @csrf

         

            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label fw-medium">Email Address</label>
              <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                class="form-control custom-input @error('email') is-invalid @enderror"
                placeholder="Enter your email"
              >
              @error('email')
              <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

           

                <!-- Password -->
                <div class="mb-3 position-relative">
                <label for="password" class="form-label fw-medium">Password</label>
                
                <input 
                    id="password" 
                    type="password" 
                    name="password" 
                    required
                    class="form-control custom-input pe-5 @error('password') is-invalid @enderror"
                    placeholder="Enter password"
                >

                <!-- Eye Icon -->
                <span 
                    class="fa fa-eye field-icon toggle-password text-muted"
                    style="position: absolute; top: 70%; right: 15px; transform: translateY(-50%); cursor: pointer;"
                    toggle="#password"
                ></span>

                @error('password')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                 
                </div>
            <!-- Forgot Password -->
            @if (Route::has('password.reset'))
            <div class="mb-3 text-end">
              <a href="{{ route('password.reset') }}" class="text-decoration-none text-primary small">Forgot Password?</a>
            </div>
            @endif
        
            <!-- Submit -->
            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-dark btn-lg fw-semibold text-white custom-btn">Login</button>
            </div>

            <!-- Login Link -->
            <div class="text-center mt-3">
              <p class="text-muted mb-0">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-decoration-none text-primary fw-semibold">Register</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
 document.addEventListener('turbo:load', function() {

    console.log('Turbo is loaded in register page!');
    document.addEventListener('click', function(e) {
        const togglePassword = e.target.closest('.toggle-password');
        if (togglePassword) {
            const passwordInput = document.querySelector(togglePassword.getAttribute('toggle'));
            if (passwordInput) {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                togglePassword.classList.toggle('fa-eye-slash');
            }
        }
    });
});

</script>
@endsection
