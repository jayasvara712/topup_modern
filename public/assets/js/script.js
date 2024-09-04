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

// currency
document.addEventListener("DOMContentLoaded", function () {
    var currencyDropdown = document.getElementById("currencyDropdown");
    var currencyText = document.getElementById("currencyText");
    var currencyIcon = document.getElementById("currencyIcon");
    var currencyTextSidebar = document.getElementById("currencyTextSidebar");
    var currencyIconSidebar = document.getElementById("currencyIconSidebar");
    var currentScreen = window.innerWidth;
    var dropdownItems = document.querySelectorAll(
        ".dropdown-menu .dropdown-item"
    );

    dropdownItems.forEach(function (item) {
        item.addEventListener("click", function () {
            var selectedCurrency = this.getAttribute("data-currency");
            if (selectedCurrency === "SGD") {
                currencyText.textContent = "SGD"; // Dollar icon
                currencyTextSidebar.textContent = "SGD"; // Dollar icon
                currencyIcon.className = "icons icon-currency"; // Dollar icon
                currencyIconSidebar.className = "icons icon-currency"; // Dollar icon
                price.textContent = "SGD";
            } else if (selectedCurrency === "IDR") {
                currencyText.textContent = "IDR"; // Rupiah icon
                currencyTextSidebar.textContent = "IDR"; // Rupiah icon
                currencyIcon.className = "icons icon-currency"; // Rupiah icon
                currencyIconSidebar.className = "icons icon-currency"; // Rupiah icon
                price.textContent = "IDR";
            }
        });
    });
});
