document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registerForm');
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const role = document.getElementById('role');
    const nameError = document.getElementById('nameError');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');
    const roleError = document.getElementById('roleError');

    form.addEventListener('submit', function (event) {
        let valid = true;

        // Reset errors
        nameError.textContent = '';
        emailError.textContent = '';
        passwordError.textContent = '';
        roleError.textContent = '';

        // Name validation
        if (!name.value) {
            nameError.textContent = 'Name is required.';
            valid = false;
        }

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

        // Role validation
        if (!role.value) {
            roleError.textContent = 'Please select a role.';
            valid = false;
        }

        if (!valid) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
});
