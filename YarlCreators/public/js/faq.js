
document.addEventListener("DOMContentLoaded", function () {
    const questions = document.querySelectorAll(".faq-question");

    questions.forEach(q => {
        q.addEventListener("click", () => {
            const currentlyActive = document.querySelector(".faq-question.active");
            if (currentlyActive && currentlyActive !== q) {
                currentlyActive.classList.remove("active");
                currentlyActive.nextElementSibling.classList.remove("active");
            }

            q.classList.toggle("active");
            q.nextElementSibling.classList.toggle("active");
        });
    });
});
