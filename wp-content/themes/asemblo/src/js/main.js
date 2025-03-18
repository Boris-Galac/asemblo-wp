///// HAM BTN AND NAV OPEN/CLOSEDS

const hamBtn = document.querySelector(".ham-btn");
const nav = document.querySelector(".nav");
hamBtn.addEventListener("click", (e) => {
  if (nav.getAttribute("aria-expanded") === "false") {
    nav.setAttribute("aria-expanded", "true");
    hamBtn.setAttribute("data-active", "true");
    gsap.from(".nav__item", {
      stagger: 0.2,
      x: "100%",
      duration: 0.5,
      opacity: 0,
      ease: "ease",
    });
  } else {
    nav.setAttribute("aria-expanded", "false");
    hamBtn.setAttribute("data-active", "false");
  }
});

//// GSAP
document.addEventListener("DOMContentLoaded", (event) => {
  gsap.registerPlugin(ScrollTrigger);

  gsap.from(".headline-span", {
    opacity: 0,
    x: -50,
    duration: 2,
    stagger: 0.6,
    scrollTrigger: {
      trigger: ".headline-span",
      start: "top 90%",
      // markers: true,
    },
  });
  gsap.from(".offer-feature", {
    opacity: 0,
    x: -50,
    duration: 2,
    stagger: 0.4,
    scrollTrigger: {
      trigger: ".offer-feature",
      start: "top 90%",
      // markers: true,
    },
  });
  gsap.from(".benefit-card", {
    opacity: 0,
    x: 50,
    duration: 2,
    stagger: 0.4,
    scrollTrigger: {
      trigger: ".benefit-card",
      start: "top 90%",
      // markers: true,
    },
  });
  gsap.from(".show-left", {
    opacity: 0,
    x: -50,
    duration: 2,
    stagger: 0.4,
    scrollTrigger: {
      trigger: ".show-left",
      start: "top 90%",
      // markers: true,
    },
  });
  gsap.from(".show-right", {
    opacity: 0,
    x: 50,
    duration: 2,
    stagger: 0.4,
    scrollTrigger: {
      trigger: ".show-right",
      start: "top 90%",
      // markers: true,
    },
  });
});

//// BACK TO TOP

const backToTopbtn = document.querySelector(".back-to-top-btn");

backToTopbtn.addEventListener("click", (e) => {
  window.scroll({
    top: 0,
  });
});
window.addEventListener("scroll", (e) => {
  if (window.scrollY > 150) {
    backToTopbtn.setAttribute("data-visible", "true");
    document.querySelector(".header").classList.add("active");
  } else {
    backToTopbtn.setAttribute("data-visible", "false");
    document.querySelector(".header").classList.remove("active");
  }
});

/////////// HIDE HEADER ON SCROLL

let lastScrollTop = 0;
let navbar = document.querySelector(".header");
let navbarHeight = document.querySelector(".header").scrollHeight;
console.log(navbarHeight);
window.addEventListener("scroll", (e) => {
  let scrollTop = window.scrollY || document.documentElement.scrollTop;
  if (scrollTop > lastScrollTop) {
    navbar.style.top = `-${navbarHeight}px`;
  } else {
    navbar.style.top = "0";
  }
  lastScrollTop = scrollTop;
});
