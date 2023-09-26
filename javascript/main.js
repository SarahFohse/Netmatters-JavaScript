
const storageType = localStorage;
const consentPropertyName = 'jdc_consent';
const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);
const body = document.getElementsByTagName('body');
const html = document.getElementsByTagName('html');
const consentParent = document.querySelector('.scroll');
let consentPopup;
let background;

window.onload = () => {

  const acceptFn = event => {
      saveToStorage(storageType);
      background.classList.add('bg-hidden');
      consentParent.classList.add('hide');
      body[0].classList.remove('stop-scrolling');
      html[0].classList.remove('stop-scrolling');
  };
  consentPopup = document.getElementById('consent-popup');
  const acceptBtn = document.getElementById('accept');
  background = document.getElementById('background');
  acceptBtn.addEventListener('click', acceptFn);

  if (shouldShowPopup(storageType)) {
          background.classList.remove('bg-hidden');
          consentParent.classList.remove('hide');
          body[0].classList.add('stop-scrolling');
          html[0].classList.add('stop-scrolling');
  }

};
const consentButton = document.getElementById('consent-btn');

consentButton.addEventListener('click', () => {
  background.classList.toggle('bg-hidden');
  consentParent.classList.toggle('hide');
  body[0].classList.toggle('stop-scrolling');
  html[0].classList.toggle('stop-scrolling');
});

//// sticky header
let lastScroll = 0;

window.addEventListener("scroll", () => {
	const currentScroll = window.scrollY;
	if (currentScroll <= 200) {
		body[0].classList.remove("scroll-up");
		return;
	}

	if (currentScroll > lastScroll && !body[0].classList.contains("scroll-down")) {
		body[0].classList.remove("scroll-up");
		body[0].classList.add("scroll-down");
	} else if (
		currentScroll < lastScroll && body[0].classList.contains("scroll-down")) {
		body[0].classList.remove("scroll-down");
		body[0].classList.add("scroll-up");
	}
	lastScroll = currentScroll;
});

// \\\\\\\\\\\\\\\\\\\\\\\\\

const bannerContainer = document.querySelector('.banner');
const bannerBtns = document.querySelectorAll('.slider-btn button');
let prevBtn = bannerBtns[0];
let interval = 1;

function slideBanner(i) {
  prevBtn.children[0].classList.remove('fa-regular');
  prevBtn.children[0].classList.remove('fa-circle-dot');
  prevBtn.children[0].classList.add('fa-solid');
  prevBtn.children[0].classList.add('fa-circle');

  bannerBtns[i].children[0].classList.add('fa-regular');
  bannerBtns[i].children[0].classList.add('fa-circle-dot');
  bannerBtns[i].children[0].classList.remove('fa-solid');
  bannerBtns[i].children[0].classList.remove('fa-circle');

  if (i == 0) {
    bannerContainer.style.right = `0`;
    bannerContainer.children[0].classList.add('first-active');
  } else {
    bannerContainer.style.right = `${i}00%`;
    bannerContainer.children[0].classList.remove('first-active');
  }

  prevBtn = bannerBtns[i];
}

for (let i = 0; i < bannerBtns.length; i++) {
  bannerBtns[i].addEventListener('click', () => {
    slideBanner(i);
    interval = i;
  });
}

setInterval(() => {
  slideBanner(interval);

  interval == bannerBtns.length - 1 ? interval = 0 : interval++;
}, 4000);

// \\\\\\\\\\\\\\\\\\\\\\

const navOpen = document.getElementById('nav-hamburger');
const sideMenu = document.getElementById('side-menu-section');
const closeSideMenu = document.getElementById('close-side-menu');

function toggleSideMenu() {
  navOpen.children[0].classList.toggle('fa-bars');
  navOpen.children[0].classList.toggle('fa-x');
  sideMenu.classList.toggle('hidden-sidebar');
  body[0].classList.toggle('side-menu-active');
  closeSideMenu.classList.toggle('side-menu-active');
  body[0].classList.toggle('stop-scrolling');
  html[0].classList.toggle('stop-scrolling');
}

navOpen.addEventListener('click', toggleSideMenu);
closeSideMenu.addEventListener('click', toggleSideMenu);