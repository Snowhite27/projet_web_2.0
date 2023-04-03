// Get all the "Lire plus" links
const links = document.querySelectorAll(".lire-plus a");

// Loop through each link and add a click event listener
links.forEach((link) => {
    link.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the default link behavior

        // Get the title and content of the clicked article
        const title =
            this.parentElement.parentElement.querySelector(
                ".title"
            ).textContent;
        const content =
            this.parentElement.parentElement.querySelector(
                ".content"
            ).textContent;

        // Create a modal element and set its content
        const modal = document.createElement("div");
        modal.classList.add("modal");
        modal.innerHTML = `
      <div class="modal-content">
        <span class="modal-close">&times;</span>
        <h2>${title}</h2>
        <p>${content}</p>
      </div>
    `;

        // Add the modal to the page
        document.body.appendChild(modal);

        // Add a click event listener to the modal's close button
        const closeButton = modal.querySelector(".modal-close");
        closeButton.addEventListener("click", function () {
            modal.remove();
        });
    });
});
