// Your API Key from ipgeolocation.io
const API_KEY = "a298da4d82474fdda377ee36fc2ee1c1";

// Function to detect country
function detectCountry() {
    fetch(`https://api.ipgeolocation.io/ipgeo?apiKey=${API_KEY}`)
        .then((response) => response.json())
        .then((data) => {
            // Access the country information from the response
            const country = data.country_name;

            // Display the country in the h1 element
            console.log(country);
        })
        .catch((error) => {
            console.error("Error fetching the IP geolocation data:", error);
            console.log("Could not detect your country.");
        });
}

// Call the function on page load
window.onload = detectCountry;

document.querySelectorAll(".category-btn").forEach((button) => {
    button.addEventListener("click", function () {
        document
            .querySelectorAll(".category-btn")
            .forEach((btn) => btn.classList.remove("active"));
        this.classList.add("active");
    });
});

// select product
function selectProduct(card) {
    // Remove the 'selected' class from all cards
    document.querySelectorAll(".card").forEach(function (c) {
        c.classList.remove("selected");
    });

    // Add the 'selected' class to the clicked card
    card.classList.add("selected");
}

function toggleSidebar() {
    document.getElementById("sidebar").classList.toggle("active");
}

// Close sidebar if clicked outside
document.addEventListener("click", (event) => {
    const sidebar = document.getElementById("sidebar");
    if (!sidebar.contains(event.target)) {
        sidebar.classList.remove("show");
    }
});

// JavaScript to control dropdown menu
document.querySelectorAll(".nav-item.dropdown").forEach(function (dropdown) {
    dropdown.addEventListener("click", function () {
        var dropdownMenu = this.querySelector(".dropdown-menu");
        var isOpen = dropdownMenu.classList.contains("show");
        document.querySelectorAll(".dropdown-menu").forEach(function (menu) {
            menu.classList.remove("show");
        });
        if (!isOpen) {
            dropdownMenu.classList.add("show");
        }
    });
});

// view more function
document.addEventListener("DOMContentLoaded", (event) => {
    const viewMoreButton = document.getElementById("view-more-btn");
    const moreItems = document.getElementById("more-items");
    const allItems = document.getElementById("list-item");
    console.log("test" + allItems.length);

    // Check if more than 2 items are present
    if (allItems.length > 2) {
        viewMoreButton.classList.remove("d-none"); // Show the button
    }

    viewMoreButton.addEventListener("click", () => {
        if (moreItems.classList.contains("d-none")) {
            moreItems.classList.remove("d-none");
            viewMoreButton.textContent = "View Less"; // Change button text
        } else {
            moreItems.classList.add("d-none");
            viewMoreButton.textContent = "View More"; // Change button text
        }
    });
});
