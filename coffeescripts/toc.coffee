$ ->
    main = $('#main')
    main.prepend '<div><h5>Table of Contents</h5><ol id="page_toc"></ol></div>';
    toc_list = $('#page_toc')
    $('h3').each (index, value) ->
        link_title = $(value).html();
        toc_list.append "<li><a href=\"##{link_title}\">#{link_title}</a></li>"
        $(value).before("<a name=\"#{link_title}\"></a>")
