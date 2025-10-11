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

          <form method="POST" action="{{ route('password.reset') }}">
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

           

          
        
            <!-- Submit -->
            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-dark btn-lg fw-semibold text-white custom-btn">Continue</button>
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
