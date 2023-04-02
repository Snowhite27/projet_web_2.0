/********* Scroll Top  **********/

//Fetch Specific Class
const btnScrollToTop = document.querySelector(".scroll-top");

// Scroll to top after click in a smooth fashion
btnScrollToTop.addEventListener("click", (e) => {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth",
    });
});

// toggle  "scroll to top" when the user scrolls to a specific part of the viewport
window.addEventListener("scroll", (e) => {
    console.log(window.scrollY);
    btnScrollToTop.style.display = window.scrollY > 20 ? "block" : "none";
});
