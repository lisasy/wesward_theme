<!DOCTYPE html>     
<html lang="en">
<head>       
    <meta charset="utf-8" />
    <title>Wesward</title>
    <meta name="author" content="Wesward" />
    <meta name="description" content="Wesward is the student activism blog for Wesleyan University. Our website is http://www.wesward.org" />
    <meta name="keywords" content="Wesleyan, activism, student groups, wes, university organizing center, organizers, community, service, Wesleyan University, wesward, wesleyan activism, wes activism" />   
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/1140.css" type="text/css" /> 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/reset.css" type="text/css" />  
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap.css" type="text/css" /> 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" /> 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/mobile.css" type="text/css" />         
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />                       
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://www.wesward.org/wp-content/themes/wesward_theme/js/css3-mediaqueries.js"></script>
    <script>
    $(document).ready(function() {
        //scroll to top animation
    	$("a.topLink,a#back-to-top").click(function() {
    		$("html, body").animate({
    			scrollTop: $($(this).attr("href")).offset().top + "px"
    		}, {
    			duration: 500,
    			easing: "swing"
    		});
    		return false;
    	});
    	
    	jQuery(window).scroll(function(){
    
    if(jQuery(window).scrollTop() > 1000){
      // show back to top
      jQuery('#back-to-top').stop().animate({opacity: 0.6});
    }
    else{
      // hide back to top
      jQuery('#back-to-top').stop().animate({opacity: 0});
    }
  });

    	 
    });
    </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29358197-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php wp_head(); ?>
</head>   
<body> 
<div id="container" class="container row">
        <header class="container"> 
            <div class="row">
                <div class="threecol">                                                      
                  <a href="http://www.wesward.org">
                   <img src="http://www.wesward.org/wp-content/themes/wesward_theme/img/wesward_logo.png" alt="wesward" id="logo" width="240" height="auto">  
                   </a>
               </div>    
               <div class="ninecol last">
                   <div class="headline">An online hub for Wesleyan activism</div>
                   <nav id="top_nav">  
                    <?php wp_nav_menu(array(   
                            'container' => false,
                            'items_wrap' => '<ul class="tabs">%3$s</ul>'
                            )
                        ); 
                    ?>   
                   </nav>   
                </div> 
            </div>    
        </header>