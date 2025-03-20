document.addEventListener("DOMContentLoaded", function () {
    const navItems = document.querySelectorAll(".nav-item");

    navItems.forEach(item => {
        item.addEventListener("click", function () {
            // Remove active class from all items
            navItems.forEach(nav => nav.classList.remove("active"));

            // Add active class to the clicked item
            this.classList.add("active");
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.2, // Trigger animation when 20% of the section is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
                observer.unobserve(entry.target); // Stop observing after animation triggers
            }
        });
    }, observerOptions);

    // Observe Featured Products Section
    const featuredSection = document.querySelector(".featured-products");
    if (featuredSection) {
        observer.observe(featuredSection);
    }

    // Observe Product Cards
    const productCards = document.querySelectorAll(".product-card");
    productCards.forEach(card => observer.observe(card));
});
