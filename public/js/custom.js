/******/ (() => {
    // webpackBootstrap
    var __webpack_exports__ = {};
    /*!********************************!*\
  !*** ./resources/js/custom.js ***!
  \********************************/
    const sliderTrack = document.querySelector(".slider-track");
    const sliderItems = document.querySelectorAll(".slider-item");
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");

    let currentIndex = 0;
    const slideWidth = sliderItems[0].clientWidth + 20;
    const maxIndex = sliderItems.length - 1;
    const autoplayInterval = 5000;

    prevBtn.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex--;
            sliderTrack.style.transform = `translateX(-${
                slideWidth * currentIndex
            }px)`;
            updateActiveItem();
        }
    });

    nextBtn.addEventListener("click", () => {
        if (currentIndex < maxIndex) {
            currentIndex++;
            sliderTrack.style.transform = `translateX(-${
                slideWidth * currentIndex
            }px)`;
            updateActiveItem();
        } else {
            currentIndex = 0;
            sliderTrack.style.transform = `translateX(0)`;
            updateActiveItem();
        }
    });

    function updateActiveItem() {
        sliderItems.forEach((item, index) => {
            if (index === currentIndex) {
                item.classList.add("active");
            } else {
                item.classList.remove("active");
            }
        });
    }

    // Autoplay function
    function startAutoplay() {
        setInterval(() => {
            nextBtn.click();
        }, autoplayInterval);
    }

    // Start autoplay when the page loads
    startAutoplay();

    /******/
})();
