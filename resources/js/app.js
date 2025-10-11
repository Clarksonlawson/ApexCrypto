import './bootstrap';
// import { Turbo } from "@hotwired/turbo-rails";
// window.Turbo = Turbo;

import intlTelInput from 'intl-tel-input';
import 'intl-tel-input/build/css/intlTelInput.css';
import './auth'

document.addEventListener('DOMContentLoaded', function () {
    const phoneInput = document.querySelector("#phone");
    if (phoneInput) {
        window.intlTelInput = intlTelInput(phoneInput, {
            // Optional: Automatically set the country based on user's IP
            initialCountry: "auto",
            geoIpLookup: callback => {
                fetch("https://ipapi.co/json")
                    .then(res => res.json())
                    .then(data => callback(data.country_code))
                    .catch(() => callback("us")); // Fallback to US if API fails
            },
            // Load the utils script from CDN for validation and formatting
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js"
        });
    }
});