window.onscroll = function () {
	const progressBar = document.querySelector("#progress-bar");
	const header = document.querySelector("header");
	const toTop = document.querySelector("#to-top");
	const fixNav = header.offsetTop;

	if (window.pageYOffset > fixNav) {
		toTop.classList.add("flex");
		toTop.classList.remove("hidden");
		header.classList.add("navbar-fixed");
	} else {
		toTop.classList.add("hidden");
		toTop.classList.remove("flex");
		header.classList.remove("navbar-fixed");
	}

	window.addEventListener("scroll", () => {
		let winScroll =
			document.body.scrollTop || document.documentElement.scrollTop;
		let height =
			document.documentElement.scrollHeight -
			document.documentElement.clientHeight;
		progressBar.style.width = (winScroll / height) * 100 + "%";
	});
};

// hamberger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");
hamburger.addEventListener("click", function () {
	hamburger.classList.toggle("hamburger-active");
	navMenu.classList.toggle("hidden");
});
