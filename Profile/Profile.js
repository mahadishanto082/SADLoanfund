function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var toggleIcon = document.getElementById("togglePassword");
    
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.src = "eye-open.png"; // Change to the open eye icon image source
    } else {
        passwordInput.type = "password";
        toggleIcon.src = "eye-close.png"; // Change to the close eye icon image source
    }
}

