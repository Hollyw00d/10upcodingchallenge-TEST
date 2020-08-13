jQuery(document).ready(function($) {

  // Show open/close of search button
  $('#search').on('click', function() {
    $(this).toggleClass('expanded');
    if($(this).hasClass('expanded')) {
      $(this).attr({
        'aria-expanded': 'true',
        'aria-pressed': 'true'
      });

      $(this).next().addClass('active');

    } else {
      $(this).attr({
        'aria-expanded': 'false',
        'aria-pressed': 'false'
      });  
      
      $(this).next().removeClass('active');
    }
  });

});