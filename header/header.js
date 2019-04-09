    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }

    $(document).on("scroll", function() {
      if ($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });

    $(document).ready(function()
    {
      var header__burger=$('.header__burger')
      var header__burger_icon=$('.header__burger-icon ')
      header__burger_icon.click(function() 
      {
        header__burger.toggleClass('header__burger-active');
      });
      });



