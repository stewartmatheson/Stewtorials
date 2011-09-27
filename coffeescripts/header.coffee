$(document).ready ->
    $('header h1').mouseenter ->
        $('#back_link').show()

    $('header h1').mouseleave ->
        $('#back_link').hide()
