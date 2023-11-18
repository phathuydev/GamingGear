// validate form add user
function validateUsers() {
    var userEmail = document.getElementById('user_email').value;
    var userPassword = document.getElementById('user_password').value;
    if (userEmail === '') {
        document.getElementById('error_user_email').innerHTML = 'Email is required.';
        return false;
    } else {
        document.getElementById('error_user_email').innerHTML = '';
    }
    if (userPassword === '') {
        document.getElementById('error_user_password').innerHTML = 'Password is required.';
        return false;
    } else {
        document.getElementById('error_user_password').innerHTML = '';
    }
    return true;
}

