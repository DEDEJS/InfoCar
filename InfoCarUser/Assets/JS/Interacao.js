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
  function ShowPassword(){
  const toggle = document.getElementById("toggleSenha");
  const inputSenha = document.getElementById("senha");

  toggle.addEventListener("click", () => {
    const type = inputSenha.getAttribute("type") === "password" ? "text" : "password";
    inputSenha.setAttribute("type", type);

    // alterna ícone olho aberto/fechado
    if (type === "text") {
      toggle.innerHTML = `
        <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/>
        <path d="M1 1l22 22"/>
        <path d="M9.88 9.88A3 3 0 0 0 12 15c.87 0 1.64-.35 2.12-.88"/>
      `;
    } else {
      toggle.innerHTML = `
        <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z"/>
        <circle cx="12" cy="12" r="3"/>
      `;
    }
  });
  }
  