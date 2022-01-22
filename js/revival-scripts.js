(function($) {
    $(function() {
      $('a.rev-button').each(function(){
        wid = $(this).width() + 65;
        $(this).css('width', wid+'px');
      });
    });
  })(jQuery);