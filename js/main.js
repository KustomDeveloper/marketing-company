
var j = jQuery.noConflict();

j(function() {
  //Slick Carousel

  j('.equipment-slider').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 5,
      slidesToScroll: 5,
      prevArrow:"<img class='a-left control-c prev slick-prev' src='http://localhost/josedager/wp-content/themes/jdequipment/images/slide-left.png'>",
      nextArrow:"<img class='a-right control-c next slick-next' src='http://localhost/josedager/wp-content/themes/jdequipment/images/slide-right.png'>",
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

    //Fix focus state in subscribe form
    var subscribeForm = j('footer input[type="email"]');

    subscribeForm.focus(function() {
      var currentValue = j(this).attr('value');
      j(this).attr('value', '');
      j(this).attr('placeholder', currentValue);
    }).blur(function() {
      let value = j(this).attr('value');
      if(value === '') {
        let data = j(this).attr('placeholder');
        j(this).attr('value', data);
      }
    })
    

    //Fix focus state in sidebar form
    var sidebarFormInputText = j('.sidebar-page form input[type="text"]');
    var sidebarFormInputEmail = j('.sidebar-page form input[type="email"]');
    var sidebarFormTextarea = j('.sidebar-page form textarea');

    sidebarFormInputText.focus(function() {
      var currentValue = j(this).attr('value');
      j(this).attr('value', '');
      j(this).attr('placeholder', currentValue);
    }).blur(function() {
      let value = j(this).attr('value');
      if(value === '') {
        let data = j(this).attr('placeholder');
        j(this).attr('value', data);
      }
    })

    sidebarFormInputEmail.focus(function() {
      var currentValue = j(this).attr('value');
      j(this).attr('value', '');
      j(this).attr('placeholder', currentValue);
    }).blur(function() {
      let value = j(this).attr('value');
      if(value === '') {
        let data = j(this).attr('placeholder');
        j(this).attr('value', data);
      }
    })

    sidebarFormTextarea.focus(function() {
      var currentValue = j(this).attr('value');
      j(this).attr('value', '');
      j(this).attr('placeholder', currentValue);
    }).blur(function() {
      let value = j(this).attr('value');
      if(value === '') {
        let data = j(this).attr('placeholder');
        j(this).attr('value', data);
      }
    })


})