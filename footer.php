
    </div>
    <footer>
    Stewtorials &copy; <?php echo date('Y'); ?> <a href="http://rtmatheson.com">Stewart Matheson</a> 
    | <a href="https://github.com/stewartmatheson/Stewtorials">Source Code</a>
    | This site has been created with the awesome <a href="http://html5boilerplate.com">HTML5 Boiler Plate</a>
    </footer>
  </div> <!--! end of #container -->


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="/js/plugins.js"></script>
  <script defer src="/js/mylibs/header.js"></script>
  
  <?php if(!is_index_page()): ?>
  <script defer src="/js/mylibs/toc.js"></script>
  <?php endif; ?>
  
  <script defer src="/js/script.js"></script>
  <!-- end scripts-->


  <script> // Change UA-XXXXX-X to be your site's ID
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
