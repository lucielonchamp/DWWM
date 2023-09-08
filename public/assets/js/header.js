const menu = document.querySelector(".menu");
const menuInner = menu.querySelector(".menu-inner");
const menuArrow = menu.querySelector(".menu-arrow");
const burger = document.querySelector(".burger");
const overlay = document.querySelector(".overlay");

function toggleMenu() {
   menu.classList.toggle("is-active");
   overlay.classList.toggle("is-active");
}

function showSubMenu(children) {
   subMenu = children.querySelector(".submenu");
   subMenu.classList.add("is-active");
   subMenu.style.animation = "slideLeft 0.35s ease forwards";
   const menuTitle = children.querySelector("i").parentNode.childNodes[0]
      .textContent;
   menu.querySelector(".menu-title").textContent = menuTitle;
   menu.querySelector(".menu-header").classList.add("is-active");
}

function hideSubMenu() {
   subMenu.style.animation = "slideRight 0.35s ease forwards";
   setTimeout(() => {
      subMenu.classList.remove("is-active");
   }, 300);

   menu.querySelector(".menu-title").textContent = "";
   menu.querySelector(".menu-header").classList.remove("is-active");
}

function toggleSubMenu(e) {
   if (!menu.classList.contains("is-active")) {
      return;
   }
   if (e.target.closest(".menu-dropdown")) {
      const children = e.target.closest(".menu-dropdown");
      showSubMenu(children);
   }
}

window.addEventListener("resize", () => {
   if (window.innerWidth >= 992) {
      if (menu.classList.contains("is-active")) {
         toggleMenu();
      }
   }
});

burger.addEventListener("click", toggleMenu);
overlay.addEventListener("click", toggleMenu);
menuArrow.addEventListener("click", hideSubMenu);
menuInner.addEventListener("click", toggleSubMenu);


document.addEventListener('DOMContentLoaded', function() {

   document.querySelector('body').classList.add('darkmode');
   var targetDiv = document.querySelector('.num-4');
   var parentDiv = targetDiv.parentNode;
   var imageDiv = document.getElementById('menu-products-img');

   function moveImage() {
         if (window.innerWidth >= 993) {
            parentDiv.insertBefore(imageDiv, targetDiv);
         } else if (window.innerWidth <= 992) {
            parentDiv.appendChild(imageDiv);
         }
   }

   window.addEventListener('ready', moveImage);

   window.addEventListener('resize', moveImage);
   parentDiv.insertBefore(imageDiv, targetDiv);
   
   var header = document.getElementById('header');
   var hp = document.getElementById('homepage');

   if (hp) {
      header.style.marginBottom = '0';
   }
});

