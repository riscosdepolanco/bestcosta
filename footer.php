<div class="slogan bottom"><p>Facilitamos íntegramente tu proyecto de vida e inversión en cualquier parte de España</div>
<div class="footer">
  <ul class="nav">
    <li><a href="#">Formulario</a></li>
    <li>(+34) 649 40 16 95</li>
    <li><a mailto="info@bestcosta.com">info@bestcosta.com</a></li>
  </ul>
</div>
</div>

<!-- The JavaScript -->
<!--script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script-->
<!--script type="text/javascript" src="jquery.easing.1.3.js"></script-->
<!---script src="jquery.backstretch.min.js"></script-->

<!--script src="jquery.sidr.min.js"></script-->
<!--script type="text/javascript" src="jquery.fullscreenCycler.min.js"></script-->
<script language="javascript" type="text/javascript">

// --HEADER--
jQuery(function(){
jQuery('#header').show().animate({
width: "100%"
},1000);
});

// --ARROW--
jQuery(function() {
    jQuery('ul.nav a, .arrow_r').bind('click',function(event){
        var $anchor = jQuery(this);
        /*
        if you want to use one of the easing effects:
        $('html, body').stop().animate({
            scrollLeft: $($anchor.attr('href')).offset().left
        }, 1500,'easeInOutExpo');
         */
        jQuery('html, body').stop().animate({
            scrollLeft: jQuery($anchor.attr('href')).offset().left
        }, 1100);
        event.preventDefault();
    });
});

// --SIDR--
jQuery(function() {
    jQuery('#simple-menu').sidr();
    });
jQuery(function(){
    setArrowFunc();//---CHECK
    jQuery(window).resize(function(){
      setArrowFunc();//---下記setCenterFuncを実行
    })

function setArrowFunc() {
    var windowWidth = jQuery(window).width();
    var x = (windowWidth - 90) + "px";
    jQuery(".arrow_r").css('left',x);
    }
});
jQuery(function(){
  jQuery('div.menu-sidr-container').attr('id', 'sidr');
});

// --CONSTRUCTION SLIDER--
jQuery(function() {
var i = new Array("http://localhost:8888/test/wordpress/wp-content/uploads/2014/06/full_cons_03.jpg","http://localhost:8888/test/wordpress/wp-content/uploads/2014/06/full_cons_04.jpg");
jQuery('#fsCycler').fullscreenSlider({
speed: 1,
transitionSpeed: 2,
backgroundColor: "transparent",
images: i
});
});




</script>
</body>
</html>
