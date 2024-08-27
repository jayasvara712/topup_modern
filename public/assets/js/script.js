let sections = document.querySelectorAll(".section");
let currentSectionIndex = 0;
let isScrolling = false;

// Your API Key from ipgeolocation.io
const API_KEY = "a298da4d82474fdda377ee36fc2ee1c1";

function scrollToSection(index) {
    if (index >= 0 && index < sections.length) {
        isScrolling = true;
        window.scrollTo({
            top: sections[index].offsetTop,
            behavior: "smooth",
        });

        // Prevent scroll event from firing until scrolling is done
        setTimeout(() => {
            isScrolling = false;
        }, 1000); // 1 second delay
    }
}

function handleScroll() {
    if (!isScrolling) {
        let scrollPosition = window.scrollY + window.innerHeight / 2;

        sections.forEach((section, index) => {
            if (
                scrollPosition >= section.offsetTop &&
                scrollPosition < section.offsetTop + section.offsetHeight
            ) {
                currentSectionIndex = index;
            }
        });
    }
}

window.addEventListener("scroll", handleScroll);

window.addEventListener("wheel", (event) => {
    if (!isScrolling) {
        if (event.deltaY > 0) {
            scrollToSection(currentSectionIndex + 1);
        } else {
            scrollToSection(currentSectionIndex - 1);
        }
    }
});

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
