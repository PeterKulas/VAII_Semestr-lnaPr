const paragraphPass = document.getElementById("passValue");
const passMsg = document.getElementById("passMsg");
const strengthOfPassword = document.getElementById("spanPassValue");

const firstName = document.getElementById("inputPass");
const lastName = document.getElementById("inputPass");
const password = document.getElementById("inputPass");
const repassword = document.getElementById("inputRepass");

password.addEventListener("input", function () {
  if (!checkLength(0)) {
    paragraphPass.classList.add("hidden");
  }
  if (checkLength(0)) {
    paragraphPass.classList.remove("hidden");
    strengthOfPassword.innerHTML = "slabe";
    strengthOfPassword.style.color = "red";
  }
  if (checkLength(7) && validatePassword()) {
    strengthOfPassword.innerHTML = "dobre";
    strengthOfPassword.style.color = "orange";
  }
  if (checkLength(9) && validatePassword()) {
    strengthOfPassword.innerHTML = "vyborne";
    strengthOfPassword.style.color = "green";
  }
});

repassword.addEventListener("input", function () {
  passMsg.classList.remove("hidden");
  if (samePasswords()) {
    repassword.style.border = "5px solid #90EE90";
    passMsg.innerHTML = "Hesla su zhodné.";

    setTimeout(function () {
      document.getElementById("passMsg").innerHTML = "";
      repassword.style.border = "0px solid #90EE90";
      passMsg.classList.add("hidden");
    }, 2000);
  } else {
    document.getElementById("passMsg").innerHTML = "Hesla sa nezhodujú.";
    repassword.style.border = "5px solid #F08080";
  }
});

const samePasswords = function () {
  if (password.value === repassword.value) {
    return true;
  } else {
    return false;
  }
};

const validatePassword = function () {
  if (checkPwd(/\d/) && checkPwd(/[a-z]/) && checkPwd(/[A-Z]/)) {
    return true;
  } else {
    return false;
  }
};

const checkLength = function (count) {
  if (password.value.length > count) {
    return true;
  } else {
    return false;
  }
};

const checkPwd = function (regex) {
  let pwd = password.value;
  if (pwd.search(regex) == -1) {
    return false;
  } else {
    return true;
  }
};
