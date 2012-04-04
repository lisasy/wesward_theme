<?
/*
Template Name: About
*/
?>

<?php get_header(); ?>
<div id="main" class="container">
    <div class="row">
        <aside id="left_sidebar" class="threecol">
            <section>
                <section id="wesward_instructions" class="side_box">
                	<?php if ( !function_exists('dynamic_sidebar')
                	|| !dynamic_sidebar('use-wesward') ) : ?>
                	<?php endif; ?>
                </section> 
                <section id="join_wesward_team" class="side_box"> 
                	<?php if ( !function_exists('dynamic_sidebar')
                	|| !dynamic_sidebar('join-wesward') ) : ?>
                	<?php endif; ?>
                </section>                         
            </section>
        </aside>
        <section id="main_content" class="ninecol last">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <header>
                <h1>About WesWard</h1>
            </header>
            <article class="content">
                <?php the_content(); ?>
                <img src="http://www.wesward.org/wp-content/themes/wesward_theme/img/wesward_buttons.png" alt"comment">
            </article> 
            <?php endwhile; else: endif; ?>
            <!--
<div class="container">
                <div class="row">
                    <div class="fourcol">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                        </p> 
                    </div> 
                    <div class="fourcol">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                        </p>
                    </div>
                    <div class="fourcol last">
                         <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                        </p>
                    </div>  
                    
                    <div class="fourcol">
                                             <article class="member">
                                                 <h4>Leonid Liu '14</h4>
                                             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                                             </p>  
                                             </article>
                                            </div> 
                                            <div class="fourcol">
                                                <article class="member">
                                                    <h4>Lisa Sy '13</h4> 
                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                                                </p>  
                                                </article>
                                            </div>
                                            <div class="fourcol last">
                                                <article class="member">  
                                                    <h4>Haley Baron '12</h4> 
                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                                                </p>  
                                                </article>
                                            </div>              
                 </div>
            </div>                                                       
-->                                
        </section>  
    </div>                                                
</div>
<?php get_footer(); ?>