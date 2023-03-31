// Check if the countdown end date and time is already saved in localStorage
let countDownDate = localStorage.getItem("countDownDate");

// If the countdown end date and time is not saved in localStorage, set it to 10 days from now
if (!countDownDate) {
    countDownDate = new Date().getTime() + 10 * 24 * 60 * 60 * 1000;
    localStorage.setItem("countDownDate", countDownDate);
}

// Update the countdown every 1 second
let x = setInterval(function () {
    // Get the current date and time
    const now = new Date().getTime();

    // Find the distance between now and the count down date
    const distance = countDownDate - now;

    // Calculate days, hours, minutes and seconds left
    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Format time units with leading zero if necessary
    const formatTime = (time) => (time < 10 ? `0${time}` : time);

    // Display the result in the elements with the corresponding IDs
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = formatTime(hours);
    document.getElementById("minutes").innerHTML = formatTime(minutes);
    document.getElementById("seconds").innerHTML = formatTime(seconds);

    // If the countdown is finished, set a new countdown end date and time 10 days from now
    if (distance < 0) {
        countDownDate = new Date().getTime() + 10 * 24 * 60 * 60 * 1000;
        localStorage.setItem("countDownDate", countDownDate);
    }
}, 1000);
