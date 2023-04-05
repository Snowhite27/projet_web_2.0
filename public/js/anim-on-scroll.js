// Get the elements with specific IDs
const section1 = document.querySelector("#section1");
const section2 = document.querySelector("#section2");
const section3 = document.querySelector("#section3");

// Define boolean variables to keep track of whether the animation has already been played for each section
let section1AnimationPlayed = false;
let section2AnimationPlayed = false;
let section3AnimationPlayed = false;

// Define a function to check the scroll position and add/remove the "animate" class
function checkScroll() {
    // Get the position of each section element relative to the viewport
    const section1Position =
        section1.getBoundingClientRect().top + window.scrollY;
    const section2Position =
        section2.getBoundingClientRect().top + window.scrollY;
    const section3Position =
        section3.getBoundingClientRect().top + window.scrollY;
    // Get the current scroll position of the window
    const currentPosition = window.pageYOffset;

    // Section 1
    if (currentPosition >= section1Position * 0.5 && !section1AnimationPlayed) {
        const storyImg = section1.querySelector("#story-img");
        storyImg.classList.add("animate");
        const rectangleGradient = section1.querySelector("#rectangle-gradient");
        rectangleGradient.classList.add("animate");
        const circleGradient = section1.querySelector("#circle-gradient");
        circleGradient.classList.add("animate");
        const title = section1.querySelector("#title");
        title.classList.add("animate");
        const content = section1.querySelector("#content");
        content.classList.add("animate");
        section1AnimationPlayed = true;
    }

    // Section 2
    if (currentPosition >= section2Position * 0.7 && !section2AnimationPlayed) {
        const activityOneImg = section2.querySelector("#activity-one");
        activityOneImg.classList.add("animate");
        const activityTwoImg = section2.querySelector("#activity-two");
        activityTwoImg.classList.add("animate");
        const activityThreeImg = section2.querySelector("#activity-three");
        activityThreeImg.classList.add("animate");
        const activityFourImg = section2.querySelector("#activity-four");
        activityFourImg.classList.add("animate");
        const activityFiveImg = section2.querySelector("#activity-five");
        activityFiveImg.classList.add("animate");
        const title = section2.querySelector("#title");
        title.classList.add("animate");
        const content = section2.querySelector("#content");
        content.classList.add("animate");
        const buttonOne = section2.querySelector("#button-one");
        buttonOne.classList.add("animate");
        section2AnimationPlayed = true;
    }

    // Section 3
    if (currentPosition >= section3Position * 0.8 && !section3AnimationPlayed) {
        const title = section3.querySelector("#title");
        title.classList.add("animate");
        const content = section3.querySelector("#content");
        content.classList.add("animate");
        const contentTwo = section3.querySelector("#content-two");
        contentTwo.classList.add("animate");
        const buttonTwo = section3.querySelector("#button-two");
        buttonTwo.classList.add("animate");
        const newsImg = section3.querySelector("#news-img");
        newsImg.classList.add("animate");
        const mediumCircle = section3.querySelector("#medium-circle");
        mediumCircle.classList.add("animate");
        const smallCircle = section3.querySelector("#small-circle");
        smallCircle.classList.add("animate");
        section3AnimationPlayed = true;
    }
}

// Add a scroll event listener to the window, which calls the checkScroll function when the user scrolls
window.addEventListener("scroll", checkScroll);
