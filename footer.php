<footer id="footer" class="container"> 
    <div class="row">
        <div id="footer_col_1" class="threecol">
        	<?php if ( !function_exists('dynamic_sidebar')
        	|| !dynamic_sidebar('footer-1') ) : ?>
        	<?php endif; ?>
        </div>
        <div id="footer_col_2" class="threecol">
            <h3>Navigation</h3>
            <ul>   
                <?php wp_nav_menu(array(   
                        'container' => false,
                        )
                    ); 
                ?>                                                                   
            </ul>
        </div>
        <div id="footer_col_3" class="threecol">
        	<?php if ( !function_exists('dynamic_sidebar')
        	|| !dynamic_sidebar('footer-3') ) : ?>
        	<?php endif; ?>
        </div>
        <div id="footer_col_4" class="threecol last">
        	<?php if ( !function_exists('dynamic_sidebar')
        	|| !dynamic_sidebar('footer-2') ) : ?>
        	<?php endif; ?>               
        </div>
     </div>                                       
</footer>               
</div>
<?php wp_footer(); ?>     
</body>
</html>