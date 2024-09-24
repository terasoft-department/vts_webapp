document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('loginForm');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');

    form.addEventListener('submit', function (event) {
        let valid = true;

        // Reset errors
        emailError.textContent = '';
        passwordError.textContent = '';

        // Email validation
        if (!email.value || !email.value.includes('@')) {
            emailError.textContent = 'Please enter a valid email.';
            valid = false;
        }

        // Password validation
        if (!password.value || password.value.length < 8) {
            passwordError.textContent = 'Password must be at least 8 characters.';
            valid = false;
        }

        if (!valid) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
});
