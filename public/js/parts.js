/******** Menu Nav Toggle Functionality */

const toggleMenu = document.querySelector(".toggle-menu");
const menu = document.querySelector("#menu");

toggleMenu.addEventListener("click", () => {
    menu.classList.toggle("show-menu");
});
