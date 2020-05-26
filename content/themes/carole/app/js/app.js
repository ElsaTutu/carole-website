var app = {
  init: function() {
    console.log('init');
  },
  menubar: function(){
    let mainNav = document.getElementById('js-menu');
    let navBarToggle = document.getElementById('js-navbar-toggle');
navBarToggle.addEventListener('click', function () {
    
    mainNav.classList.toggle('active');});
  }
  
};

$(app.init);
$(app.menubar);