const form = document.getElementById("form");
const firstname = document.getElementById("firstname");
const lastname = document.getElementById("lastname");
const email = document.getElementById("email");
const password = document.getElementById("password");
const phone = document.getElementById("phone");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  checkInputs();
});

function checkInputs() {
  // to prevent from spaces we use trim
  const firstnamevalue = firstname.value.trim();
  const lastnamevalue = lastname.value.trim();
  const emailvalue = email.value.trim();
  const passwordvalue = password.value.trim();
  const phonevalue = phone.value.trim();
  if (firstnamevalue === "") {
    // add error class
    setError(firstname, "First Name is required!");
  } else if (!isBetween(firstnamevalue.length, 3, 25)) {
    setError(firstname, "First name must be between 3 and 25 characters.");
  } else {
    // add success class
    setSuccess(firstname);
  }

  if (lastnamevalue === "") {
    // add error class
    setError(lastname, "Last Name is required!");
  } else if (!isBetween(lastnamevalue.length, 3, 25)) {
    setError(lastname, "Last name must be between 3 and 25 characters.");
  } else {
    // add success class
    setSuccess(lastname);
  }

  if (emailvalue === "") {
    // add error class
    setError(email, "Email cannot be blank!");
  } else if (!isemail(emailvalue)) {
    setError(email, "Email is invalid!");
  } else {
    // add success class
    setSuccess(email);
  }

  if (phonevalue === "") {
    // add error class
    setError(phone, "Phone is required!");
  } else if (!isPhoneValid(phonevalue)) {
    setError(phone, "Phone number must be 10 digit.");
  } else {
    // add success class
    setSuccess(phone);
  }
  if (passwordvalue === "") {
    // add error class
    setError(password, "Password is required!");
  } else if (!isPasswordSecure(passwordvalue)) {
    setError(
      password,
      "Password must has at least 6 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number, and 1 special character in (!@#$%^&*)"
    );
  } else {
    // add success class
    setSuccess(password);
  }
}

function setError(input, msg) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");
  small.innerText = msg;
  // add error class
  formControl.className = "form-control error";
}
function setSuccess(input) {
  const formControl = input.parentElement;
  formControl.className = "form-control success";
}

const isRequired = (value) => (value === "" ? false : true);
const isBetween = (length, min, max) =>
  length < min || length > max ? false : true;

function isemail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}

const isPasswordSecure = (password) => {
  const re = new RegExp(
    "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(?=.{8,})"
  );
  return re.test(password);
};

const isPhoneValid = (phone) => {
  const phoneNumberRegex = /^\d{10}$/;

  return phoneNumberRegex.test(phone);
};
