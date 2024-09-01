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
