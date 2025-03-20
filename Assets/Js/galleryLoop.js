document.addEventListener("DOMContentLoaded", function () {
    const galleryItems = document.querySelectorAll(".gallery-item");

    galleryItems.forEach(item => {
        const imgElement = item.querySelector("img");
        const images = item.getAttribute("data-images").split(",");
        let currentIndex = 0;

        function changeImage() {
            imgElement.style.transition = "opacity 0.8s ease-in-out"; // Smooth transition
            imgElement.style.opacity = "0"; // Fade out

            setTimeout(() => {
                currentIndex = (currentIndex + 1) % images.length;
                imgElement.src = `./Assets/images/Gallery/${images[currentIndex]}`;
                imgElement.style.opacity = "1"; // Fade in
            }, 500); // Short delay to change image after fade-out
        }

        // Random interval for each image
        setInterval(changeImage, Math.floor(Math.random() * (8000 - 5000) + 5000)); // Change every 5-8 seconds
    });
});
