
const banner = document.querySelector('.banner');
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
    banner.style.right = `0`;
    banner.children[0].classList.add('first-active');
  } else {
    banner.style.right = `${i}00%`;
    banner.children[0].classList.remove('first-active');
  }

  prevBtn = bannerBtns[i];
  currentImg = i + 1;
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

// \\\\\\\\\\\\\
let sliderImg = document.querySelectorAll('.slider-img');
let pressed = false;
let startx;
let x;
let splitRight;
let dragged = false;
let currentImg = 1;

banner.addEventListener('mousedown', (e)=> {
  pressed = true;
  startx = e.offsetX;
  banner.style.cursor = 'grab';
});

function dragSliderActiveBtns(direction, pos, negPos) {
  if (direction == 'right') {
    bannerBtns[negPos].children[0].classList.remove('fa-regular');
    bannerBtns[negPos].children[0].classList.remove('fa-circle-dot');
    bannerBtns[negPos].children[0].classList.add('fa-solid');
    bannerBtns[negPos].children[0].classList.add('fa-circle');

    bannerBtns[pos].children[0].classList.add('fa-regular');
    bannerBtns[pos].children[0].classList.add('fa-circle-dot');
    bannerBtns[pos].children[0].classList.remove('fa-solid');
    bannerBtns[pos].children[0].classList.remove('fa-circle');

    prevBtn = bannerBtns[pos];
    interval = pos;
  } else {
    bannerBtns[pos].children[0].classList.remove('fa-regular');
    bannerBtns[pos].children[0].classList.remove('fa-circle-dot');
    bannerBtns[pos].children[0].classList.add('fa-solid');
    bannerBtns[pos].children[0].classList.add('fa-circle');

    bannerBtns[negPos].children[0].classList.add('fa-regular');
    bannerBtns[negPos].children[0].classList.add('fa-circle-dot');
    bannerBtns[negPos].children[0].classList.remove('fa-solid');
    bannerBtns[negPos].children[0].classList.remove('fa-circle');

    prevBtn = bannerBtns[negPos];
    interval = pos;
  }
}

window.addEventListener('mouseup', ()=>{
  pressed = false;
  banner.style.cursor = 'auto';

  if (dragged) {
    splitRight = banner.style.right.split('0', 1);
    // If you drag mouse left, move banner to the right
    if (x - startx < 0 && currentImg != 7) {
      dragSliderActiveBtns('right', currentImg, currentImg - 1);
      currentImg += 1;
      banner.style.right = `${+splitRight + 1}00%`;
    } else if (x - startx < 0 && currentImg == 7) {
      currentImg = 1;
      dragSliderActiveBtns('right', 0, 6);
      banner.style.right = '0px';

    // If you drag mouse right, move banner to the left
    } else if (x - startx > 0 && currentImg != 1) {
      currentImg -= 1;
      dragSliderActiveBtns('left', currentImg, currentImg - 1);
      banner.style.right = `${+splitRight - 1}00%`;
    } else if (x - startx > 0 && currentImg == 1) {
      currentImg = 7;
      dragSliderActiveBtns('left', 0, 6);
      banner.style.right = '600%';
    }
  }

  dragged = false;
});

banner.addEventListener('mousemove', (e)=>{
  if(!pressed) return;
  e.preventDefault();
  splitRight = banner.style.right.split('0', 1);
  x = e.offsetX;
  dragged = true;

  // sliderImg.style.left = `${x - startx}px`;
  // banner.style.right = `-${x - startx}px`;
  

  
});
