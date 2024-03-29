floating_window = $('#back_to_top')

hideShowFloatingWindow = ->
    scrollTop = $(@).scrollTop()
    if scrollTop < 100
        floating_window.hide()
    else
        floating_window.show()

moveFloatingWindowToRight = ->
    leftValue = $(window).width() - floating_window.width() - 10
    floating_window.css 'left', leftValue.toString() + "px"

$ ->
    hideShowFloatingWindow()
    moveFloatingWindowToRight()
    $(window).scroll ->
        top = $(@).scrollTop()
        floating_window.css 'top', top.toString() + 'px'
        hideShowFloatingWindow()
        
    $(window).resize ->
        moveFloatingWindowToRight()
        

    if $('.add_to_toc').length > 0
        main = $('#main')
        main.prepend '<div><h5>Table of Contents</h5><ol id="page_toc"></ol></div>'
        toc_list = $('#page_toc')
        $('.add_to_toc').each (index, value) ->
            link_title = $(value).html()
            toc_list.append "<li><a href=\"##{link_title}\">#{link_title}</a></li>"
            $(value).before("<a name=\"#{link_title}\"></a>")
