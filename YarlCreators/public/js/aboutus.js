
  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".stat-number");
    let started = false;

    function animateCounter(counter) {
      const target = +counter.getAttribute("data-target");
    const duration = 2000;
    const startTime = performance.now();

    function update(now) {
        const elapsed = now - startTime;
    const progress = Math.min(elapsed / duration, 1);
    const value = Math.floor(progress * target);
    counter.textContent = value;

    if (progress < 1) {
        requestAnimationFrame(update);
        } else {
        counter.textContent = target + "+";
        }
      }

    requestAnimationFrame(update);
    }

    function startCounting() {
        counters.forEach(counter => animateCounter(counter));
    }

    const observer = new IntersectionObserver(entries => {
      if (entries[0].isIntersecting && !started) {
        startCounting();
    started = true;
      }
    }, {threshold: 0.5 });

    const statsSection = document.querySelector("#stats");
    observer.observe(statsSection);
  });




  document.addEventListener("DOMContentLoaded", () => {
    const track = document.querySelector(".testimonial-track");
    const slides = document.querySelectorAll(".testimonial-card");
    let index = 0;

    const updateSlider = () => {
        track.style.transform = `translateX(-${index * 100}%)`;
      dots.forEach(dot => dot.classList.remove("active"));
    dots[index].classList.add("active");
    };

    const autoSlide = () => {
        index = (index + 1) % slides.length;
    updateSlider();
    };

    let slideInterval = setInterval(autoSlide, 6000);

    updateSlider();
  });
