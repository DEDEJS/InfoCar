  function toggleInfo(button) {
    const infoBox = button.nextElementSibling;
    infoBox.classList.toggle('show');
    button.classList.toggle('active');
  }