jQuery(document).ready(function($) {

  // Show open/close of search button
  $('#search').on('click', function() {
    $(this).toggleClass('expanded');
    if($(this).hasClass('expanded')) {
      $(this).attr({
        'aria-expanded': 'true',
        'aria-pressed': 'true'
      });

      $(this).addClass('med-blue-bg');

      $(this).next().addClass('active');

    } else {
      $(this).attr({
        'aria-expanded': 'false',
        'aria-pressed': 'false'
      });  

      $(this).removeClass('med-blue-bg');
      
      $(this).next().removeClass('active');

    }
  });

  // Show open/close of nav button
  $('.mobile-nav-btn').on('click', function() {
    $(this).toggleClass('expanded');
    if($(this).hasClass('expanded')) {
      $(this).attr({
        'aria-expanded': 'true',
        'aria-pressed': 'true'
      });

      $(this).addClass('med-blue-bg');

      $(this).find('img.open').removeClass('active');
      $(this).find('img.close').addClass('active');

      $('#menu-primary').addClass('active');

    } else {
      $(this).attr({
        'aria-expanded': 'false',
        'aria-pressed': 'false'
      }); 

      $(this).removeClass('med-blue-bg');

      $(this).find('img.open').addClass('active');
      $(this).find('img.close').removeClass('active');

      $('#menu-primary').removeClass('active');
    }
  });  

  $(window).on('resize', function() {
    var width = $(window).width();

    if(width <= 1050) {
      $('#search').removeClass('expanded med-blue-bg');

      $('#search').attr({
        'aria-expanded': 'false',
        'aria-pressed': 'false'
      }); 

      $('#search').next().removeClass('active'); 
    }

  });

});