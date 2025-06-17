document.addEventListener("DOMContentLoaded", function () {
    let burger = document.querySelector("#dropdownBtn");
    let menu = document.querySelector("#dropdownList");

    burger.addEventListener("click", () => {
        menu.classList.toggle("hidden");});
    });