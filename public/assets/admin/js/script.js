// validate form add user
function validateUsers() {
  var userName = document.getElementById('user_name').value;
  var userEmail = document.getElementById('user_email').value;
  var userPassword = document.getElementById('user_password').value;
  var userImage = document.getElementById('user_image').value;
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (userName === '') {
    document.getElementById('error_user_name').innerHTML = 'Username is required.';
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
  if (userImage === '') {
    document.getElementById('error_user_image').innerHTML = 'Image is required.';
    return false;
  } else {
    document.getElementById('error_user_image').innerHTML = '';
  }
  return true;
}

// validate form add product
function validateProducts() {
  var product_name = document.getElementById('product_name').value;
  var product_image = document.getElementById('product_image').value;
  var product_price = document.getElementById('product_price').value;
  var product_price_reduce = document.getElementById('product_price_reduce').value;
  var product_quantity = document.getElementById('product_quantity').value;
  var product_describe = document.getElementById('product_describe').value;
  if (product_name === '') {
    document.getElementById('error_product_name').innerHTML = 'Product Name is required.';
    return false;
  } else {
    document.getElementById('error_product_name').innerHTML = '';
  }
  if (product_image === '') {
    document.getElementById('error_product_image').innerHTML = 'Image is required.';
    return false;
  } else {
    document.getElementById('error_product_image').innerHTML = '';
  }
  if (product_price === '') {
    document.getElementById('error_product_price').innerHTML = 'Price is required.';
    return false;
  } else if (product_price < 0) {
    document.getElementById('error_product_price').innerHTML = 'The price must be greater than 0.';
    return false;
  } else {
    document.getElementById('error_product_price').innerHTML = '';
  }
  if (product_price_reduce < 0) {
    document.getElementById('error_product_price_reduce').innerHTML = 'The price reduce must be greater than 0.';
    return false;
  } else {
    document.getElementById('error_product_price_reduce').innerHTML = '';
  }
  if (product_quantity === '') {
    document.getElementById('error_product_quantity').innerHTML = 'Quantity is required.';
    return false;
  } else if (product_quantity < 0) {
    document.getElementById('error_product_quantity').innerHTML = 'The quantity must be greater than 0.';
    return false;
  } else {
    document.getElementById('error_product_quantity').innerHTML = '';
  }
  if (product_describe === '') {
    document.getElementById('error_product_describe').innerHTML = 'Describe is required.';
    return false;
  } else {
    document.getElementById('error_product_describe').innerHTML = '';
  }
  return true;
}

// validate form edit product
function validateEditProducts() {
  var product_name = document.getElementById('product_name').value;
  var product_price = document.getElementById('product_price').value;
  var product_price_reduce = document.getElementById('product_price_reduce').value;
  var product_quantity = document.getElementById('product_quantity').value;
  var product_describe = document.getElementById('product_describe').value;
  if (product_name === '') {
    document.getElementById('error_product_name').innerHTML = 'Product Name is required.';
    return false;
  } else {
    document.getElementById('error_product_name').innerHTML = '';
  }
  if (product_price === '') {
    document.getElementById('error_product_price').innerHTML = 'Price is required.';
    return false;
  } else if (product_price < 0) {
    document.getElementById('error_product_price').innerHTML = 'The price must be greater than 0.';
    return false;
  } else {
    document.getElementById('error_product_price').innerHTML = '';
  }
  if (product_price_reduce < 0) {
    document.getElementById('error_product_price_reduce').innerHTML = 'The price reduce must be greater than 0.';
    return false;
  } else {
    document.getElementById('error_product_price_reduce').innerHTML = '';
  }
  if (product_quantity === '') {
    document.getElementById('error_product_quantity').innerHTML = 'Quantity is required.';
    return false;
  } else if (product_quantity < 0) {
    document.getElementById('error_product_quantity').innerHTML = 'The quantity must be greater than 0.';
    return false;
  } else {
    document.getElementById('error_product_quantity').innerHTML = '';
  }
  if (product_describe === '') {
    document.getElementById('error_product_describe').innerHTML = 'Describe is required.';
    return false;
  } else {
    document.getElementById('error_product_describe').innerHTML = '';
  }
  return true;
}

// validate form add post
function validateAddPost() {
  var post_image_section = document.getElementById('post_image_section').value;
  var post_title_content = document.getElementById('post_title_content').value;
  var post_image_content = document.getElementById('post_image_content').value;
  var post_content_content = document.getElementById('post_content_content').value;
  if (post_image_section === '') {
    document.getElementById('error_post_image_section').innerHTML = 'Image is required.';
    return false;
  } else {
    document.getElementById('error_post_image_section').innerHTML = '';
  }
  if (post_title_content === '') {
    document.getElementById('error_post_title_content').innerHTML = 'Title is required.';
    return false;
  } else {
    document.getElementById('error_post_title_content').innerHTML = '';
  }
  if (post_image_content === '') {
    document.getElementById('error_post_image_content').innerHTML = 'Image is required.';
    return false;
  } else {
    document.getElementById('error_product_quantity').innerHTML = '';
  }
  if (post_content_content === '') {
    document.getElementById('error_post_content_content').innerHTML = 'Content is required.';
    return false;
  } else {
    document.getElementById('error_post_content_content').innerHTML = '';
  }
  return true;
}

// validate form edit post
function validateEditPost() {
  var post_title_content = document.getElementById('post_title_content').value;
  var post_content_content = document.getElementById('post_content_content').value;
  if (post_title_content === '') {
    document.getElementById('error_post_title_content').innerHTML = 'Title is required.';
    return false;
  } else {
    document.getElementById('error_post_title_content').innerHTML = '';
  }
  if (post_content_content === '') {
    document.getElementById('error_post_content_content').innerHTML = 'Content is required.';
    return false;
  } else {
    document.getElementById('error_post_content_content').innerHTML = '';
  }
  return true;
}

// validate form add banner home
function validateAddBannerHome() {
  var banner_home_image = document.getElementById('banner_home_image').value;
  if (banner_home_image === '') {
    document.getElementById('error_banner_home_image').innerHTML = 'Image is required.';
    return false;
  } else {
    document.getElementById('error_banner_home_image').innerHTML = '';
  }
  return true;
}

// validate form add banner product
function validateAddBannerProduct() {
  var banner_product_image = document.getElementById('banner_product_image').value;
  if (banner_product_image === '') {
    document.getElementById('error_banner_product_image').innerHTML = 'Image is required.';
    return false;
  } else {
    document.getElementById('error_banner_product_image').innerHTML = '';
  }
  return true;
}

// validate form add add product
function validateCategory() {
  var image = document.getElementById('image').value;
  var name = document.getElementById('name').value;
  if (image === '') {
    document.getElementById('error_image').innerHTML = 'Image is required.';
    return false;
  } else {
    document.getElementById('error_image').innerHTML = '';
  }
  if (name === '') {
    document.getElementById('error_name').innerHTML = 'Name is required.';
    return false;
  } else {
    document.getElementById('error_name').innerHTML = '';
  }
  return true;
}
// validate form add edit
function validateEditCategory() {
  var name = document.getElementById('name').value;
  if (name === '') {
    document.getElementById('error_name').innerHTML = 'Name is required.';
    return false;
  } else {
    document.getElementById('error_name').innerHTML = '';
  }
  return true;
}