
// slider js
 var $carousel = $('[data-owl-carousel]');
 if ($carousel.length) {
     $carousel.each(function (index, el) {
         $(this).owlCarousel($(this).data('owl-carousel'));
     });
 }

//  event tab

$(function() {
    var $tabButtonItem = $('#tab-button li'),
    $tabSelect = $('#tab-select'),
    $tabContents = $('.tab-contents'),
    activeClass = 'is-active';
    
    $tabButtonItem.first().addClass(activeClass);
    $tabContents.not(':first').hide();
    
    $tabButtonItem.find('a').on('click', function(e) {
    var target = $(this).attr('href');
    
    $tabButtonItem.removeClass(activeClass);
    $(this).parent().addClass(activeClass);
    $tabSelect.val(target);
    $tabContents.hide();
    $(target).show();
    e.preventDefault();
    });
    
    $tabSelect.on('change', function() {
    var target = $(this).val(),
    targetSelectNum = $(this).prop('selectedIndex');
    
    $tabButtonItem.removeClass(activeClass);
    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
    $tabContents.hide();
    $(target).show();
    });
    });

    // header js     
    
    window.addEventListener("scroll", function () {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 50);
    })
  
    $(window).on('load', function () {
      setTimeout(() => {
          $('#exampleModal11').modal('show');
      }, 10000)

  });


