"use strict";
const mainMenu = document.querySelector(".nav-item");
const closeMenu = document.querySelector(".closeMenu");
const openMenu = document.querySelector(".openMenu");
const menu = document.querySelector(".menu-list");
const menu_items = document.querySelectorAll(".linkk");

openMenu.addEventListener("click", show);
closeMenu.addEventListener("click", close);

function show() {
	if(menu.style.display === "none"){
		menu.style.display = "flex";
		// menu.style.opacity = "0";
		// setTimeout(function () {
		// 	menu.style.opacity = "1";
		// }, 10);		
	}else{
		menu.style.display = "none";
		// menu.style.opacity = "0";
		// setTimeout(function () {
		// 	menu.style.opacity = "1";
		// }, 10);	
	}

	// mainMenu.style.display = "flex";
	// mainMenu.style.top = "0";
}
function close() {
	menu.style.display = "none";
}

menu_items.forEach((item) => {
	item.addEventListener("click", function () {
		close();
	});
});

menu_items.forEach((item) => {
	item.addEventListener("click", function () {
		close();
	});
});

////sticky navbar
const header = document.querySelector(".header");
const nav = document.querySelector("nav");
const navHeight = nav.getBoundingClientRect().height;
const stickyNav = function (entries) {
	const [entry] = entries;
	// console.log(entry);

	if (!entry.isIntersecting) nav.classList.add("sticky");
	else nav.classList.remove("sticky");
};

const headerObserver = new IntersectionObserver(stickyNav, {
	root: null,
	threshold: 0,
	rootMargin: `-${navHeight}px`,
});

headerObserver.observe(header);
