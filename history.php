<?
/*
Template Name: History 
*/
?>
<?php get_header(); ?>
<div id="main" class="container">
    <div class="row">
        <aside id="left_sidebar" class="threecol">
            <section>
                <section id="history_timeline" class="side_box">
                    <div class="head">
                        <h3>Timeline</h3>   
                    </div>                                  
                    <p>
                    	A work in progress...
					</p>                               
                </section>                        
            </section>
        </aside>
        <section id="main_content" class="ninecol last">
            <header>
                <h1>History of Activism at Wesleyan</h1>
            </header>
            <?php query_posts('cat=9&showposts=1'); 
            while (have_posts()) : the_post(); ?>
            <article class="post">
                <header>
                    <h2 class="post_title"><a href="<?php the_permalink(); ?>">THIS WEEK IN ACTIVIST HISTORY: <br><?php the_title(); ?></a></h2>               
                    <span class="author">By <em><a href=""><?php the_author_posts_link(); ?></a></em></span>
                    <ul class="post_info">
                        <li><img src="/wesward/wp-content/themes/wesward_theme/img/icon/wesward_clock.png" alt"time"><time> <?php the_time('F j, Y') ?></time></li>
                    </ul>
                </header> 
                     <?php the_content(); ?>
                <footer>
                    <ul class="post_info">
                        <li><span class="post_comment"><img src="/wesward/wp-content/themes/wesward_theme/img/icon/wesward_comment.png" alt"comment"> <?php comments_popup_link( '0 comments', '1 comment', '% comments' ); ?></span></li>                                
                    </ul>
                </footer>               
            </article>    
            <?php endwhile; ?> 
            <div class="container">
                <div class="row">
                                          
                    <div class="twelvecol">
                        <?php query_posts('cat=9'); 
                        while (have_posts()) : the_post(); ?>
                        <article class="post">
                        <header>
                            <h2 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>               
                            <span class="author">By <em><a href=""><?php the_author_posts_link(); ?></a></em></span>
                            <ul class="post_info">
                                <li><img src="/wesward/wp-content/themes/wesward_theme/img/icon/wesward_clock.png" alt"time"><time> <?php the_time('F j, Y') ?></time></li>
                            </ul>
                        </header> 
                            <?php the_excerpt(); ?>
                        <footer>
                            <ul class="post_info">
                        <li><span class="post_comment"><img src="/wesward/wp-content/themes/wesward_theme/img/icon/wesward_comment.png" alt"comment"> <a href=""><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></a></span></li>                               
                            </ul>
                        </footer>               
                    </article> 
                    <?php endwhile; ?>                                
                    </div>
                 </div>
            </div>                                                                                       
        </section>  
    </div>                                                
</div>
<?php get_footer(); ?>