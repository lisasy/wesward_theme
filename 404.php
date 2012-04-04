<?php get_header(); ?>
<div id="main" class="container">

    <div class="row">
		<aside id="left_sidebar" class="left_sidebar threecol">
		<?php include('news-leftsidebar.php'); ?>
		</aside>
             <section id="main_content" class="sixcol">
            <header>
                <h1>The page you're looking for does not exist.</h1>
            </header>
                <p>
                <a href="http://www.wesward.org">&larr; Go Home</a></p> 
                                                                                    
        </section>  
        <aside id="right_sidebar" class="threecol last"> 
            <?php include('news-rightsidebar.php'); ?> 
            <a id="back-to-top" title="Back to top" href="#container">
  <img src="http://www.wesward.org/wp-content/themes/wesward_theme/img/arrow.png" alt="Back to Top" />
</a>  
        </aside>        
    </div>                                                
</div>
<?php get_footer(); ?>