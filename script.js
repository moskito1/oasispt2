var menuActive = document.querySelectorAll(".menu-category");

var category = function (categoryClick) {
  // Remove the "active" class from all buttons
  menuActive.forEach((btn) => {
    btn.classList.remove("active");
  });
  // Add the "active" class to the clicked button
  menuActive[categoryClick].classList.add("active");
};

menuActive.forEach((categoryActive, index) => {
  categoryActive.addEventListener("click", () => {
    category(index);
  });
});
