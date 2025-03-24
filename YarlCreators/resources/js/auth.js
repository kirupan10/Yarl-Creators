document.addEventListener("DOMContentLoaded", function () {
    const signInForm = document.getElementById("signInForm");
    const signUpForm = document.getElementById("signUpForm");
    const forgotForm = document.getElementById("forgotForm");

    const signInBox = signInForm.parentElement;
    const signUpBox = signUpForm.parentElement;
    const forgotBox = forgotForm.parentElement;

    document.getElementById("signUpLink").addEventListener("click", function () {
        signInBox.classList.add("hidden");
        signUpBox.classList.remove("hidden");
    });

    document.getElementById("signInLink").addEventListener("click", function () {
        signUpBox.classList.add("hidden");
        signInBox.classList.remove("hidden");
    });

    document.getElementById("forgotPass").addEventListener("click", function () {
        signInBox.classList.add("hidden");
        forgotBox.classList.remove("hidden");
    });

    document.getElementById("backToSignIn").addEventListener("click", function () {
        forgotBox.classList.add("hidden");
        signInBox.classList.remove("hidden");
    });
});
