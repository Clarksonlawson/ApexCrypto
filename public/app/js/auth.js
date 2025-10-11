// resources/js/auth.js

// Import intl-tel-input
import intlTelInput from 'intl-tel-input';
import 'intl-tel-input/build/css/intlTelInput.css';

// Wrap the logic in a function to be called on Turbo events
function initAuthForm() {
    // Password visibility toggle
    const togglePassword = document.querySelector('.toggle-password');
    const password = document.querySelector('#password');
    if (togglePassword && password) {
        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    }

    // Phone number input initialization
    const phoneInputField = document.querySelector('#phone');
    const fullPhoneInput = document.querySelector('#full_phone');

    if (phoneInputField && fullPhoneInput) {
        const iti = intlTelInput(phoneInputField, {
            initialCountry: "us",
            separateDialCode: true,
            nationalMode: false,
            preferredCountries: ["us", "gb", "ng", "ca"],
            formatOnDisplay: true,
            autoPlaceholder: "polite",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });

        function validatePhone() {
            const isValid = iti.isValidNumber();
            if (isValid) {
                fullPhoneInput.value = iti.getNumber();
                phoneInputField.classList.remove('is-invalid');
                phoneInputField.classList.add('is-valid');
            } else {
                fullPhoneInput.value = '';
                phoneInputField.classList.remove('is-valid');
                phoneInputField.classList.add('is-invalid');
            }
        }

        phoneInputField.addEventListener('blur', validatePhone);
        phoneInputField.addEventListener('change', validatePhone);
        phoneInputField.addEventListener('keyup', () => {
            phoneInputField.classList.remove('is-valid', 'is-invalid');
        });
        phoneInputField.addEventListener('countrychange', validatePhone);
    }
}

// Call the initialization function on Turbo page loads
document.addEventListener('turbo:load', initAuthForm);
