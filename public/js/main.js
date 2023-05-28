document.addEventListener('DOMContentLoaded', function() {

  // A nav menu button to expand nav menu on mobile screen
  const navMenuBtn = document.querySelector('.nav__burger');
  const navMenu = document.querySelector('.nav__links');

  navMenuBtn.addEventListener('click', () => {
    navMenu.classList.toggle('open-menu');
  });

  // A 'read more' card button to expand and collapse cards
const cards = document.getElementsByClassName('card');

[...cards].forEach(card => {
  const button = card.querySelector('.card__button');
  const cardBody = card.querySelector('.card__body');
  let collapsed = true;

  button.addEventListener('click', function() {
    if (collapsed) {
      button.textContent = 'Read Less';
      cardBody.style.overflowY = 'visible';
      cardBody.style.height = 'min-content';
      collapsed = false;
    } else {
      button.textContent = 'Read More';
      cardBody.style.overflowY = 'hidden';
      cardBody.style.height = '10rem';
      collapsed = true;
      }
    });
  });    
});