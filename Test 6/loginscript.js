const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signup');

// Function to toggle between sign up and sign in forms
function toggleForms(signUp = true) {
    if (signUp) {
        signInForm.style.display = "none";
        signUpForm.style.display = "block";
    } else {
        signInForm.style.display = "block";
        signUpForm.style.display = "none";
    }
}

// Event listeners for sign up and sign in buttons
signUpButton.addEventListener('click', function () {
    toggleForms(true);
});

signInButton.addEventListener('click', function () {
    toggleForms(false);
});

// Function to validate form on submission
function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var error = document.getElementById("error-message");

    // Reset error message
    error.innerHTML = "";

    // Check for empty fields
    if (username.trim() === "") {
        error.innerHTML = "Please enter your username.";
        return false;
    }

    if (password.trim() === "") {
        error.innerHTML = "Please enter your password.";
        return false;
    }

    return true;
}
