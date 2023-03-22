/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/custom.js ***!
  \********************************/
var sliderTrack = document.querySelector(".slider-track");
var sliderItems = document.querySelectorAll(".slider-item");
var prevBtn = document.querySelector(".prev");
var nextBtn = document.querySelector(".next");
var currentIndex = 0;
var slideWidth = sliderItems[0].clientWidth + 20;
var maxIndex = sliderItems.length - 1;
var autoplayInterval = 5000;
prevBtn.addEventListener("click", function () {
  if (currentIndex > 0) {
    currentIndex--;
    sliderTrack.style.transform = "translateX(-".concat(slideWidth * currentIndex, "px)");
    updateActiveItem();
  }
});
nextBtn.addEventListener("click", function () {
  if (currentIndex < maxIndex) {
    currentIndex++;
    sliderTrack.style.transform = "translateX(-".concat(slideWidth * currentIndex, "px)");
    updateActiveItem();
  } else {
    currentIndex = 0;
    sliderTrack.style.transform = "translateX(0)";
    updateActiveItem();
  }
});
function updateActiveItem() {
  sliderItems.forEach(function (item, index) {
    if (index === currentIndex) {
      item.classList.add("active");
    } else {
      item.classList.remove("active");
    }
  });
}

// Autoplay function
function startAutoplay() {
  setInterval(function () {
    nextBtn.click();
  }, autoplayInterval);
}

// Start autoplay when the page loads
startAutoplay();
/******/ })()
;