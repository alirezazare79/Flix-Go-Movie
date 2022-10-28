Placeholdem(document.querySelectorAll("[placeholder]"));

const search = document.querySelector("header .btn-header .search");
const navToggle = document.querySelector(".nav-toggle");
const linksContainer = document.querySelector("header .menu ");
const links = document.querySelector("header .menu ul");
const rightArrow = document.querySelector(".arrow-right-slideShow");
const leftArrow = document.querySelector(".arrow-left-slideShow");
const headerNav = document.querySelector(".header_nav");

headerNav.addEventListener('click',()=>{
  console.log("clicked");
  headerNav.classList.toggle('header_nav--active');
})

search.addEventListener("click", () => {
  document.querySelector("header .search-box").classList.toggle("hidden");
});

navToggle.addEventListener("click", () => {
  // linksContainer.classList.toggle('show-links');
  const containerHeight = linksContainer.getBoundingClientRect().height;
  const linksHeight = links.getBoundingClientRect().height;
  
  if (containerHeight === 0) {
    linksContainer.style.height = `${linksHeight}px`;
  } else {
    linksContainer.style.height = 0;
  }
});

const swiper = new Swiper(".swiper", {
  // Optional parameters
  loop: true,
  rtl: true,
  slidesPerView: 4,
  spaceBetween: 30,
  // If we need pagination
  // pagination: {
  //   el: '.swiper-pagination',
  // },

  // Navigation arrows
  navigation: {
    nextEl: ".arrow-right-slideShow",
    prevEl: ".arrow-left-slideShow",
  },

  // And if we need scrollbar
  // scrollbar: {
  //   el: '.swiper-scrollbar',
  // },
});



