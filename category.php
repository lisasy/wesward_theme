<?php get_header(); ?>
<div id="main" class="container">
    <div class="row">
        <aside id="left_sidebar" class="left_sidebar threecol">
		<?php include('news-leftsidebar.php'); ?>                
        </aside>
        <section id="main_content" class="sixcol"> 
            <header>
                <a href="<?php print $_SERVER['HTTP_REFERER'];?>">&larr; Go Back</a>           
                <h1><?php single_cat_title('Displaying: '); ?></h1>
                </header>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
            <article class="post"> 
                <header>
                    <h2 class="post_title"><a href="<?php the_permalink(); ?>"><? the_title(); ?></a></h2>               
<!--                     <span class="author">By <em><a href=""><?php the_author_posts_link() ?></a></em></span> -->
<ul class="post_info">
                    	<li><span class="author">By <em><?php the_author_posts_link(); ?></em></span></li>                    
                        <li><span class="post_date"><img src="http://www.wesward.org/wp-content/themes/wesward_theme/img/icon/wesward_clock.png" alt="time"><time> <?php the_time('F j, Y') ?></time></li>
                    </ul>
                </header> 
                     <?php the_content(); ?>
				<footer>
                    <ul class="post_info">
                        <li><span class="post_comment"><img src="http://www.wesward.org/wp-content/themes/wesward_theme/img/icon/wesward_comment.png" alt"comment"> <?php comments_popup_link( '0 comments', '1 comment', '% comments' ); ?></span></li>                                
                        <li><span class="post_tag"><img src="http://www.wesward.org/wp-content/themes/wesward_theme/img/icon/wesward_tag.png" alt"tag">: <a href=""><?php the_category(', '); ?></a></li>
                    </ul>
                </footer>          
            </article>   
            <?php endwhile; else: endif; ?>
		<a href="<?php print $_SERVER['HTTP_REFERER'];?>">
	        <div class="button">
	        <button class="large_button">
	            &larr; Go Back
	        </button> 
	        </div>
		</a>       
            <div id="pagination">
               <?php echo kriesi_pagination($pages = '', $range = 2); ?>
            </div>                                                         
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