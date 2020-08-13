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

      $(this).next().addClass('active med-blue-bg');

    } else {
      $(this).attr({
        'aria-expanded': 'false',
        'aria-pressed': 'false'
      });  

      $(this).removeClass('med-blue-bg');
      
      $(this).next().removeClass('active med-blue-bg');

    }
  });

});