const paragraphPass = document.getElementById("passValue");

const strengthOfPassword = document.getElementById("spanPassValue");
const inputPassword = document.getElementById("inputPass");
const inputPasswordValue = document.getElementById("inputPass");

inputPassword.addEventListener("input", function () {
  if (inputPasswordValue.value.length > 0) {
    paragraphPass.classList.remove("hidden");
    strengthOfPassword.style.color = "red";
  }
  if (inputPasswordValue.value.length > 7) {
    strengthOfPassword.innerHTML = "dobre";
    strengthOfPassword.style.color = "orange";
  }
  if (inputPasswordValue.value.length > 9) {
    strengthOfPassword.innerHTML = "vyborne";
    strengthOfPassword.style.color = "green";
  }
});
