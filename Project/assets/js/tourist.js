document.addEventListener("DOMContentLoaded", function () {
    const scrollContainer = document.getElementById("scrollContainer");

    // Scroll buttons
    window.scrollLeft = function () {
        if (scrollContainer) {
            scrollContainer.scrollBy({ left: -300, behavior: "smooth" });
        }
    };

    window.scrollRight = function () {
        if (scrollContainer) {
            scrollContainer.scrollBy({ left: 300, behavior: "smooth" });
        }
    };

    // View on Map buttons
    const mapButtons = document.querySelectorAll(".map-btn");
    const mapFrame = document.getElementById("mapFrame");

    mapButtons.forEach(button => {
        button.addEventListener("click", () => {
            const newMapURL = button.getAttribute("data-map");

            // Scroll to map section
            const mapSection = document.getElementById("map");
            if (mapSection) {
                mapSection.scrollIntoView({ behavior: "smooth" });
            }

            // Update the map
            if (newMapURL && mapFrame) {
                mapFrame.src = newMapURL;
            }
        });
    });
});
