// Get the button and body element
const toggleButton = document.getElementById("darkModeToggle");
const body = document.body;

// Add event listener to toggle dark mode
toggleButton.addEventListener("click", () => {
    // Toggle the "dark-mode" class on the body element
    body.classList.toggle("dark-mode");

    // Toggle the icon between moon and sun
    const icon = toggleButton.querySelector("i");
    if (body.classList.contains("dark-mode")) {
        icon.classList.remove("bi-moon");
        icon.classList.add("bi-sun");
    } else {
        icon.classList.remove("bi-sun");
        icon.classList.add("bi-moon");
    }
});
