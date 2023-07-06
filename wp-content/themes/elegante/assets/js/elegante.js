function myFunction() {
    var x = document.getElementById("Topnav");
    var y = document.getElementById("BotNav");
    if (x.className === "menu-top" && y.className === "menu-top") {
      x.className += " responsive";
      y.className += " responsive";
    } else {
      x.className = "menu-top";
      y.className = "menu-top";
    }
  }

$('.shop-by-wrapp.owl-carousel').owlCarousel({
  stagePadding: 10,
  autoplay : true ,
  autoplayTimeout: 1000,
  loop:true,
  margin:10,
  nav:true,
  navText : ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:5
      }
  }
});

$('.sliderLast.owl-carousel').owlCarousel({
  stagePadding: 50,
  autoplay : true ,
  autoplayTimeout: 1000,
  loop:true,
  margin:50,
  nav:true,
  navText : ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2,
          stagePadding: 50,
          margin:50,
      },
      1000:{
          items:3
      }
  }
});

$('.owl-carousel').owlCarousel({
  stagePadding: 100,
  autoplay : true ,
  autoplayTimeout: 1000,
  loop:true,
  margin:100,
  nav:true,
  navText : ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
  responsive:{
      0:{
          items:1,
          stagePadding: 10,
          margin:10,
          nav:false
      },
      600:{
          items:2,
          stagePadding: 50,
          margin:50,
          nav:false
      },
      1000:{
          items:3
      }
  }
});

