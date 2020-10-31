  function toggleMenu() {
      let navigation = document.querySelector('.fixed-left-nav');
      let toggle = document.querySelector('.toggle');
      let brand = document.querySelector('.navbar-header');
      let pagewrapper = document.querySelector('.page-wrapper');
      navigation.classList.toggle('active');
      toggle.classList.toggle('active');
      brand.classList.toggle('active');
      pagewrapper.classList.toggle('active');
  }