const paragraphPass = document.getElementById("passValue");

const strengthOfPassword = document.getElementById("spanPassValue");
const password = document.getElementById("inputPass");
const repassword = document.getElementById("inputRepass");
const passMsg = document.getElementById("passMsg");

password.addEventListener("input", function () {
  if (password.value.length > 0) {
    paragraphPass.classList.remove("hidden");
    strengthOfPassword.innerHTML = "slabe";
    strengthOfPassword.style.color = "red";
  }
  if (password.value.length > 7) {
    strengthOfPassword.innerHTML = "dobre";
    strengthOfPassword.style.color = "orange";
  }
  if (password.value.length > 9) {
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

/*
const validPassword = function () {
  if () {
    return true;
  } else {
    return false;
  }
}
*/
