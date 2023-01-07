var form = document.getElementById('form')

form.addEventListener('submit', function (event) {
    event.preventDefault()

    var email = document.getElementById('email').value
    var error_email = document.getElementById('email_error');

    if (email.length === 0) {
        error_email.innerHTML = "Email is required!"
        return;
    } else {
        error_email.innerHTML = ""
    }

    var password = document.getElementById('password').value
    var error_password = document.getElementById('password_error');

    if (password.length === 0) {
        error_password.innerHTML = "Password is required!"
        return;
    } else if (password.length < 8) {
        error_password.innerHTML = "Password must have minimum 8 characters!"
        return;

    }
    else {
        error_password.innerHTML = ""
    }
    window.location.href="index.html"
})