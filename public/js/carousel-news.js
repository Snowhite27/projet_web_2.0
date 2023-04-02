// Selecting necessary elements from the DOM
const carousel = document.querySelector(".carousel");
const carouselCards = document.querySelectorAll(".actualite-card");
const chevronLeft = document.querySelector(".chevron-left");
const chevronRight = document.querySelector(".chevron-right");

// Calculating the width of each card and setting initial values for slide positions and slide counts
const cardWidth =
    carouselCards[0].offsetWidth +
    parseInt(getComputedStyle(carouselCards[0]).marginRight);
let slidePosition = 0;
let slidesToShow = 3;
let slidesToScroll = 1;
let maxSlide = carouselCards.length - slidesToShow;

// Function to move the carousel based on the current slide position
function moveCarousel() {
    carousel.style.transform = `translateX(-${slidePosition * cardWidth}px)`;
}

// Adding event listeners to the chevron buttons to move the carousel left or right when clicked
chevronLeft.addEventListener("click", () => {
    if (slidePosition > 0) {
        slidePosition -= slidesToScroll;
    } else {
        slidePosition = maxSlide;
    }
    moveCarousel();
});

chevronRight.addEventListener("click", () => {
    if (slidePosition < maxSlide) {
        slidePosition += slidesToScroll;
    } else {
        slidePosition = 0;
    }
    moveCarousel();
});
