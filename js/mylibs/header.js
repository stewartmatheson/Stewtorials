(function() {
  $(document).ready(function() {
    $('header h1').mouseenter(function() {
      return $('#back_link').show();
    });
    return $('header h1').mouseleave(function() {
      return $('#back_link').hide();
    });
  });
}).call(this);
