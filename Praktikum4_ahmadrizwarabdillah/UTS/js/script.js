const loginBtn = document.getElementById("login-btn");
const popup = document.getElementById("popup");
const popupOverlay = document.getElementById("popup-overlay");
const closePopupBtn = document.getElementById("close-popup");

loginBtn.addEventListener("click", () => {
    popup.classList.add("active");
    popupOverlay.classList.add("active");
});

closePopupBtn.addEventListener("click", () => {
    popup.classList.remove("active");
    popupOverlay.classList.remove("active");
});

popupOverlay.addEventListener("click", () => {
    popup.classList.remove("active");
    popupOverlay.classList.remove("active");
});
