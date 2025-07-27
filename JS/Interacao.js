  function toggleInfo(button) {
    const infoBox = button.nextElementSibling;
    infoBox.classList.toggle('show');
    button.classList.toggle('active');
  }
// menu
    document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const H1Toggle = document.querySelector('.MenuH1-toggle');
    const navMenu = document.querySelector('nav ul');
    const navMenuLinks = document.querySelector('.MenuLinks');

    menuToggle.addEventListener('click', function () {
      navMenu.classList.toggle('show');
      H1Toggle.classList.toggle('hidden');
    });
    navMenuLinks.addEventListener('click', function(){
      navMenu.classList.toggle('show');
      H1Toggle.classList.toggle('show');
    });
  });
  