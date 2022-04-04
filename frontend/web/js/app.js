let navbar = document.querySelector('.header-main');  
window.addEventListener('scroll', () => {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        navbar.classList.add('navbar-fix');
    } else {
        navbar.classList.remove('navbar-fix');
    }
})

// navbar

const menu = document.querySelector(".menu");
const menuBg = document.querySelector(".menu-bg");
const menuToggle = document.querySelector(".menu-toggle");
const menuClose = document.querySelector(".menu-close");

menuToggle.addEventListener('click', handleToggleMenu);
function handleToggleMenu(e) {
    menuBg.classList.add("is-active");
    menu.classList.add("is-active");
    menuClose.classList.add("is-active");
}

menuClose.addEventListener("click", function () {
    menuBg.classList.remove("is-active");
    menu.classList.remove("is-active");
    this.classList.remove("is-active");
  });