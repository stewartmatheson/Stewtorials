(function() {
  $(function() {
    var main, toc_list;
    main = $('#main');
    main.prepend('<div><h5>Table of Contents</h5><ol id="page_toc"></ol></div>');
    toc_list = $('#page_toc');
    return $('h3').each(function(index, value) {
      var link_title;
      link_title = $(value).html();
      toc_list.append("<li><a href=\"#" + link_title + "\">" + link_title + "</a></li>");
      return $(value).before("<a name=\"" + link_title + "\"></a>");
    });
  });
}).call(this);
