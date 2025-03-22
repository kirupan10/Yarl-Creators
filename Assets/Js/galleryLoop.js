document.addEventListener("DOMContentLoaded", () => {
    const track = document.getElementById("carousel-track");
    const prevBtn = document.querySelector(".carousel-btn.prev");
    const nextBtn = document.querySelector(".carousel-btn.next");
    const items = track.querySelectorAll(".carousel-item");
    const itemWidth = items[0].offsetWidth + 20;
    let index = 3; // Starts after cloned images

    function updateActive() {
        const allItems = track.querySelectorAll(".carousel-item");
        allItems.forEach(item => item.classList.remove("active"));
        allItems[index].classList.add("active");
    }

    function moveTo(i) {
        track.style.transition = "transform 0.5s ease-in-out";
        track.style.transform = `translateX(${-itemWidth * i}px)`;
        index = i;
        updateActive();
    }

    nextBtn.addEventListener("click", () => {
        if (index < items.length - 3) {
            moveTo(index + 1);
        }
    });

    prevBtn.addEventListener("click", () => {
        if (index > 0) {
            moveTo(index - 1);
        }
    });

    track.addEventListener("transitionend", () => {
        const total = track.querySelectorAll(".carousel-item").length;

        if (index === total - 3) {
            track.style.transition = "none";
            index = 3;
            track.style.transform = `translateX(${-itemWidth * index}px)`;
            updateActive();
        }

        if (index === 0) {
            track.style.transition = "none";
            index = total - 6;
            track.style.transform = `translateX(${-itemWidth * index}px)`;
            updateActive();
        }
    });

    // Auto-scroll every 7s
    setInterval(() => {
        moveTo(index + 1);
    }, 7000);

    // Initial load
    track.style.transform = `translateX(${-itemWidth * index}px)`;
    updateActive();
});
