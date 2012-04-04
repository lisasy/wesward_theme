<section id="frontpage" class="side_box dark_box">
    <?php if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('frontpage') ) : ?>
	<?php endif; ?>  
</section>
<?php query_posts( 'showposts=3&cat=8' ); ?> 
           <section id="featured_posts" class="side_box"> 
               <h3>Featured Posts</h3>
               <ul>  
                    <?php while ( have_posts() ) : the_post(); ?>
                   <li>
                       <h4 class="featured_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                       <p>
                           	<?php
							  $excerpt = get_the_excerpt();
							  echo string_limit_words($excerpt,25);
							  echo "...";
							?>
                       </p>   
                       <?php the_post_thumbnail(); ?>
                   </li> 
                   <?php endwhile; ?>                      
               </ul>
               <a href="http://www.wesward.org/category/featured/">
               		<div class="button"><button>More!</button>
               </a>
           </section>                                    
<section class="right_bar_img">
	<a href="http://www.wesward.org/category/green"><img src="http://www.wesward.org/wp-content/themes/wesward_theme/img/GreenScene_small.png" alt="greenscene" /></a>
</section>
<section class="right_bar_img">
	<a href="http://www.wesward.org/category/sex"><img id="green_scene_small" src="http://www.wesward.org/wp-content/themes/wesward_theme/img/WesSex_small.png" alt="greenscene" /></a>
</section>
<section class="side_box">
	<?php if ( !function_exists('dynamic_sidebar')
	|| !dynamic_sidebar('front-right') ) : ?>
	<?php endif; ?>
</section>