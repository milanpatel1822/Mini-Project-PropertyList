
document.getElementById("login").addEventListener("click", displayData);

function displayData() {
  document.querySelector('.wrapper').classList.add('showLoginForm');
}

document.getElementById("canclebtn").addEventListener("click", removeData);

function removeData() {

  document.querySelector('.wrapper').classList.remove('showLoginForm');
}



function validateLoginForm() {
  const username = document.getElementById('loginUsername').value;
  const password = document.getElementById('loginPassword').value;
  const errorMessage = document.getElementById('loginErrorMessage');

  if (username.trim() === '' || password.trim() === '') {
    errorMessage.textContent = 'Username and password are required';
    return false;
  }

  errorMessage.textContent = '';
  return true;
}

function validateSignupForm() {
  const username = document.getElementById('signupUsername').value;
  const email = document.getElementById('signupEmail').value;
  const password = document.getElementById('signupPassword').value;
  const confirmPassword = document.getElementById('signupConfirmPassword').value;
  const errorMessage = document.getElementById('signupErrorMessage');

  if (username.trim() === '' || email.trim() === '' || password.trim() === '' || confirmPassword.trim() === '') {
    errorMessage.textContent = 'All fields are required';
    return false;
  }

  if (!isValidEmail(email)) {
    errorMessage.textContent = 'Invalid email address';
    return false;
  }

  if (password.length < 4) {
    errorMessage.textContent = 'Password must be at least 4 characters long';
    return false;
  }

  if (password !== confirmPassword) {
    errorMessage.textContent = 'Passwords do not match';
    return false;
  }

  errorMessage.textContent = '';
  return true;
}

function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}