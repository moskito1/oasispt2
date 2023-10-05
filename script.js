let menuActive = document.querySelectorAll("menu-category");

var category = function (categoryClick) {
  menuActive[categoryClick].classList.add("active");
  console.log("active");
};
