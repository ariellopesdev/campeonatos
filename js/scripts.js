const sliderWrapper = document.querySelector('.slider-wrapper');
const sliderItems = document.querySelectorAll('.slider-item');
const prevButton = document.querySelector('.slider-prev');
const nextButton = document.querySelector('.slider-next');

const numItems = sliderItems.length;
let currentPosition = 0;
const itemWidth = sliderItems[0].clientWidth;

sliderWrapper.style.width = `${(itemWidth + 20) * numItems}px`;

prevButton.addEventListener('click', () => {
  if (currentPosition < 0) {
    currentPosition += itemWidth + 20;
    sliderWrapper.style.transform = `translateX(${currentPosition}px)`;
  } else {
    currentPosition = -((numItems - 3) * (itemWidth + 20));
    sliderWrapper.style.transform = `translateX(${currentPosition}px)`;
  }
});

nextButton.addEventListener('click', () => {
  if (currentPosition > -((numItems - 3) * (itemWidth + 20))) {
    currentPosition -= itemWidth + 20;
    sliderWrapper.style.transform = `translateX(${currentPosition}px)`;
  } else {
    currentPosition = 0;
    sliderWrapper.style.transform = `translateX(${currentPosition}px)`;
  }
});
