const themeBtn1 = document.querySelector(".thm-1");
const themeBtn2 = document.querySelector(".thm-2");
const themeBtn3 = document.querySelector(".thm-3");

const themes = ["#145da0", "red", "green"];

const changeTheme = function (color) {
  document.querySelector(".sidebar").style.backgroundColor = color;
};

themeBtn1.addEventListener("click", function () {
  themeBtn1.classList.add("active");
  themeBtn2.classList.remove("active");
  themeBtn3.classList.remove("active");
  changeTheme(themes[0]);
});

themeBtn2.addEventListener("click", function () {
  themeBtn1.classList.remove("active");
  themeBtn2.classList.add("active");
  themeBtn3.classList.remove("active");
  changeTheme(themes[1]);
});

themeBtn3.addEventListener("click", function () {
  themeBtn1.classList.remove("active");
  themeBtn2.classList.remove("active");
  themeBtn3.classList.add("active");
  changeTheme(themes[2]);
});
