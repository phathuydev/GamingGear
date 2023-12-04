// Ẩn hiện form bình luận
document.addEventListener("DOMContentLoaded", function () {
  var replyButtons = document.querySelectorAll('.reply-btn');

  replyButtons.forEach(function (button) {
    button.addEventListener('click', function (event) {
      event.preventDefault();

      // Get the comment ID from the data-id attribute
      var commentId = button.getAttribute('data-id');

      // Toggle the class to show/hide the associated comment form
      var commentForm = document.getElementById('comment-form-' + commentId);
      if (commentForm) {
        commentForm.classList.toggle('hidden');
      }
    });
  });
});

function validateRegister() {
  var userName = document.getElementById('user_name').value;
  var userEmail = document.getElementById('user_email').value;
  var userPassword = document.getElementById('user_password').value;
  var userCPassword = document.getElementById('user_cpassword').value;
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (userName === '') {
    document.getElementById('error_user_name').innerHTML = 'UserName is required.';
    return false;
  } else {
    document.getElementById('error_user_name').innerHTML = '';
  }
  if (userEmail === '') {
    document.getElementById('error_user_email').innerHTML = 'Email is required.';
    return false;
  } else if (!emailRegex.test(userEmail)) {
    document.getElementById('error_user_email').innerHTML = 'Email is not valid.';
    return false;
  } else {
    document.getElementById('error_user_email').innerHTML = '';
  }
  if (userPassword === '') {
    document.getElementById('error_user_password').innerHTML = 'Password is required.';
    return false;
  } else if (userPassword.length < 6) {
    document.getElementById('error_user_password').innerHTML = 'Password must be more than 6 characters.';
    return false;
  } else {
    document.getElementById('error_user_password').innerHTML = '';
  }
  if (userCPassword === '') {
    document.getElementById('error_user_cpassword').innerHTML = 'Confirm Password is required.';
    return false;
  } else if (userCPassword.length < 6) {
    document.getElementById('error_user_cpassword').innerHTML = 'Confirm Password must be more than 6 characters.';
    return false;
  } else {
    document.getElementById('error_user_cpassword').innerHTML = '';
  }
  return true;
}

function validateCheckout() {
  var user_name = document.getElementById('user_name').value;
  var user_email = document.getElementById('user_email').value;
  var user_phone = document.getElementById('user_phone').value;
  var user_address = document.getElementById('user_address').value;
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (user_name === '') {
    document.getElementById('error_user_name').innerHTML = 'Name is required.';
    return false;
  } else {
    document.getElementById('error_user_name').innerHTML = '';
  }
  if (user_email === '') {
    document.getElementById('error_user_email').innerHTML = 'Email is required.';
    return false;
  } else if (!emailRegex.test(user_email)) {
    document.getElementById('error_user_email').innerHTML = 'Email is not valid.';
    return false;
  } else {
    document.getElementById('error_user_email').innerHTML = '';
  }
  if (user_phone === '') {
    document.getElementById('error_user_phone').innerHTML = 'Phone is required.';
    return false;
  } else if (user_phone.length < 10 || user_phone.length >= 11) {
    document.getElementById('error_user_phone').innerHTML = 'The phone number must be ten digits.';
    return false;
  } else {
    document.getElementById('error_user_phone').innerHTML = '';
  }
  if (user_address === '') {
    document.getElementById('error_user_address').innerHTML = 'Address is required.';
    return false;
  } else {
    document.getElementById('error_user_address').innerHTML = '';
  }
  return true;
}

// function validateProfileClient() {
//   var user_name_client = document.getElementById('user_name_client').value;
//   var user_phone_client = document.getElementById('user_phone_client').value;
//   var user_address_client = document.getElementById('user_address_client').value;
//   var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//   if (user_name_client === '') {
//     document.getElementById('error_user_name_client').innerHTML = 'Name is required.';
//     return false;
//   } else {
//     document.getElementById('error_user_name_client').innerHTML = '';
//   }
//   if (user_phone_client === '') {
//     document.getElementById('error_user_phone_client').innerHTML = 'Phone is required.';
//     return false;
//   } else if (user_phone_client.length < 10 || user_phone_client.length >= 11) {
//     document.getElementById('error_user_phone_client').innerHTML = 'The phone number must be ten digits.';
//     return false;
//   } else {
//     document.getElementById('error_user_phone_client').innerHTML = '';
//   }
//   if (user_address_client === '') {
//     document.getElementById('error_user_address_client').innerHTML = 'Address is required.';
//     return false;
//   } else {
//     document.getElementById('error_user_address_client').innerHTML = '';
//   }
//   return true;
// }

// function validateProfileGoogle() {
//   var user_phone_google = document.getElementById('user_phone_google').value;
//   var user_address_google = document.getElementById('user_address_google').value;
//   if (user_phone_google === '') {
//     document.getElementById('error_user_phone_google').innerHTML = 'Phone is required.';
//     return false;
//   } else if (user_phone_google.length < 10 || user_phone_google.length >= 11) {
//     document.getElementById('error_user_phone_google').innerHTML = 'The phone number must be ten digits.';
//     return false;
//   } else {
//     document.getElementById('error_user_phone_google').innerHTML = '';
//   }
//   if (user_address_google === '') {
//     document.getElementById('error_user_address_google').innerHTML = 'Address is required.';
//     return false;
//   } else {
//     document.getElementById('error_user_address_google').innerHTML = '';
//   }
//   return true;
// }