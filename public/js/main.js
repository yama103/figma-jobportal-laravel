// ハンバーガーメニュー
document.addEventListener("DOMContentLoaded", () => {
  const hamburger = document.querySelector(".header__hamburger");
  const nav = document.querySelector(".header__nav");

  const overlay = document.createElement("div");
  overlay.className = "header__overlay";
  document.body.appendChild(overlay);

  const toggleMenu = () => {
    const isOpen = nav.classList.toggle("is-open");
    hamburger.classList.toggle("is-active");
    overlay.classList.toggle("is-active");
    hamburger.setAttribute("aria-expanded", isOpen);
    document.body.style.overflow = isOpen ? "hidden" : "";
  };

  const closeMenu = () => {
    nav.classList.remove("is-open");
    hamburger.classList.remove("is-active");
    overlay.classList.remove("is-active");
    hamburger.setAttribute("aria-expanded", "false");
    document.body.style.overflow = "";
  };

  hamburger.addEventListener("click", toggleMenu);

  overlay.addEventListener("click", closeMenu);

  nav.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", closeMenu);
  });
});