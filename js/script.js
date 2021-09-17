// Create slide
const slideSwiper = () => {
  var swiper = new Swiper('.swiper', {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: true,
    },
    navigation: {
      prevEl: '.swiper-button-prev',
      nextEl: '.swiper-button-next',
    },
  });
}


// tabs
const tabsInit = () => {
  const tabs = document.querySelectorAll('#tabs button');
  const tabsContent = document.getElementById('tabsContent').querySelectorAll('div.w3-container');
  for(let [index, tab] of tabs.entries()){
    tab.classList.add('w3-bottombar');
    tab.addEventListener('click', () => {
      tabs.forEach( e => e.classList.remove('w3-border-red', 'w3-white'));
      tabs[index].classList.add('w3-border-red', 'w3-white');
      tabsContent.forEach( e => e.classList.remove('w3-show'));
      tabsContent[index].classList.add('w3-show');
    });
  }
  tabs[0].click();
}


// Start carousel
window.onload = () => {

  slideSwiper();
  tabsInit();
}