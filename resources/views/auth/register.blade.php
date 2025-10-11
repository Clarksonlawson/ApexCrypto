@extends('layouts.auth')

@section('title', 'Register | ApexCrypto Finance LTD')

@section('content')
<div class="auth-page d-flex min-vh-100 align-items-center justify-content-center bg-light">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <!-- Registration Form -->
      <div class="col-lg-6 d-flex align-items-center justify-content-center">
        <div class="auth-form w-100 p-4 p-md-5 bg-white rounded-4 shadow-sm" style="max-width: 420px;">
          <h4 class="mb-4 text-center fw-semibold">Sign Up</h4>

          <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-3">
              <label for="name" class="form-label fw-medium">Full Name</label>
              <input
                id="name"
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                class="form-control custom-input @error('name') is-invalid @enderror"
                placeholder="Enter your full name"
              >
              @error('name')
              <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>

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

            <!-- Phone -->
            <div class="mb-3">
              <label for="phone" class="form-label fw-medium">Mobile Number</label>
              <input
                id="phone"
                type="tel"
                name="phone"
                class="form-control custom-input @error('phone') is-invalid @enderror"
               
              >
              @error('phone')
              <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <input type="hidden" name="full_phone" id="full_phone">

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
                    style="position: absolute; top: 34%; right: 15px; transform: translateY(-50%); cursor: pointer;"
                    toggle="#password"
                ></span>

                @error('password')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                  <!-- Password Strength Note -->
                    <small class="form-text text-muted d-block mt-1" style="font-size: 0.85rem;">
                        Password must be at least <strong>8 characters</strong> long and contain at least 
                        <strong>one lowercase</strong> letter, 
                        <strong>one uppercase</strong> letter, 
                        <strong>one number</strong>, and 
                        <strong>one special character</strong>.
                    </small>
                </div>

            <!-- Terms -->
            <div class="mb-3">
              <div class="form-check">
                <input
                  class="form-check-input @error('terms') is-invalid @enderror"
                  type="checkbox"
                  name="terms"
                  id="terms"
                  required
                >
                <label class="form-check-label" for="terms">
                  I agree to the
                  <a href="/terms" target="_blank" class="text-decoration-none">Terms and Services</a>
                </label>
                @error('terms')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <!-- Submit -->
            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-dark btn-lg fw-semibold text-white custom-btn">Register</button>
            </div>

            <!-- Login Link -->
            <div class="text-center mt-3">
              <p class="text-muted mb-0">
                Already have an account?
                <a href="{{ route('login') }}" class="text-decoration-none text-primary fw-semibold">Log in</a>
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
    // Toggle Password Visibility
    const togglePassword = document.querySelector('.toggle-password');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function () {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.classList.toggle('fa-eye-slash');
    });

   const phoneInputField = document.querySelector('#phone');
  const fullPhoneInput = document.querySelector('#full_phone');

  // Initialize intl-tel-input
  const iti = window.intlTelInput(phoneInputField, {
    initialCountry: "us",
    separateDialCode: true,
    nationalMode: false,
    preferredCountries: ["us", "gb", "ng", "ca"],
    formatOnDisplay: true,
    autoPlaceholder: "polite",
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
  });

  // --- Function to validate phone ---
  function validatePhone() {
    const isValid = iti.isValidNumber();

    if (isValid) {
      fullPhoneInput.value = iti.getNumber(); // Save the full international number
      phoneInputField.classList.remove('is-invalid');
      phoneInputField.classList.add('is-valid');
    } else {
      fullPhoneInput.value = '';
      phoneInputField.classList.remove('is-valid');
      phoneInputField.classList.add('is-invalid');
    }
  }

  // --- Events ---
  // Validate on blur or when user stops typing
  phoneInputField.addEventListener('blur', validatePhone);
  phoneInputField.addEventListener('change', validatePhone);
  phoneInputField.addEventListener('keyup', () => {
    phoneInputField.classList.remove('is-valid', 'is-invalid');
  });

  // Revalidate when the user changes the country
  phoneInputField.addEventListener('countrychange', validatePhone);

  // Optional: Automatically format while typing
  phoneInputField.addEventListener('input', function () {
    try {
      const formatted = iti.getNumber(intlTelInputUtils.numberFormat.INTERNATIONAL);
      if (formatted) fullPhoneInput.value = formatted;
    } catch (e) {
      fullPhoneInput.value = '';
    }
  });
 });
</script>
@endsection
