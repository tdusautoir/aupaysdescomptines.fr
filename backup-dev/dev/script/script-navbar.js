/* Détection de la fonctionnalité */
let passiveIfSupported = false;

try {
  window.addEventListener(
    "test",
    null,
    Object.defineProperty({}, "passive", {
      get: function () {
        passiveIfSupported = { passive: true };
      },
    })
  );
} catch (err) {}

window.addEventListener(
  "scroll",
  function () {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  },
  passiveIfSupported
);

function toggleMenu() {
  const navMenu = document.getElementById("menu-container");
  const burgerMenu = document.querySelector(".burger-menu");
  burgerMenu.addEventListener("click", () => {
    navMenu.classList.toggle("show-menu");
  });
}
toggleMenu();
