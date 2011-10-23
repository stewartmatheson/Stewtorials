(function() {
  var floating_window, hideShowFloatingWindow, moveFloatingWindowToRight;
  floating_window = $('#back_to_top');
  hideShowFloatingWindow = function() {
    var scrollTop;
    scrollTop = $(this).scrollTop();
    if (scrollTop < 100) {
      return floating_window.hide();
    } else {
      return floating_window.show();
    }
  };
  moveFloatingWindowToRight = function() {
    var leftValue;
    leftValue = $(window).width() - floating_window.width() - 10;
    return floating_window.css('left', leftValue.toString() + "px");
  };
  $(function() {
    var main, toc_list;
    hideShowFloatingWindow();
    moveFloatingWindowToRight();
    $(window).scroll(function() {
      var top;
      top = $(this).scrollTop();
      floating_window.css('top', top.toString() + 'px');
      return hideShowFloatingWindow();
    });
    $(window).resize(function() {
      return moveFloatingWindowToRight();
    });
    if ($('.add_to_toc').length > 0) {
      main = $('#main');
      main.prepend('<div><h5>Table of Contents</h5><ol id="page_toc"></ol></div>');
      toc_list = $('#page_toc');
      return $('.add_to_toc').each(function(index, value) {
        var link_title;
        link_title = $(value).html();
        toc_list.append("<li><a href=\"#" + link_title + "\">" + link_title + "</a></li>");
        return $(value).before("<a name=\"" + link_title + "\"></a>");
      });
    }
  });
}).call(this);
