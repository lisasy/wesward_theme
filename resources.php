<?
/*
Template Name: Resources
*/
?>
<?php get_header(); ?>
<div id="main" class="container">
    <div class="row">
        <aside id="left_sidebar" class="threecol">
            <section>
            	<?php if ( !function_exists('dynamic_sidebar')
            	|| !dynamic_sidebar('resources') ) : ?>
            	<?php endif; ?>                        
            </section>
        </aside>
        <section id="main_content" class="ninecol last">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>             
            <header>
                <h1>Resources</h1>
            </header>
            <article class="content">
                <header>
                    <h2>Here are some things that can help you:</h2>            
                </header> 
                <ul>  
                 <?php the_content(); ?>   
                </ul>
            </article>
            <?php endwhile; else: endif; ?>  
<!--
            <div class="container">
                <div class="row">
                    <div class="sixcol">
                        <h3>Strategies for acquiring funding</h3>
                        <?php 
                        $meta_values = get_post_meta($post->ID, 'Strategies on Acquiring Funding', true); 
                        echo $meta_values;
                        ?>   
                    </div> 
                    <div class="sixcol last"> 
                        <h3>Strategies on reaching out to others</h3>
                        <?php 
                        $meta_values = get_post_meta($post->ID, 'Strategies on How to Reach Out to Others', true); 
                        echo $meta_values;
                        ?>
                    </div>  
                 </div>
            </div>  
-->                                                                                     
        </section>  
    </div>                                                
</div>
<?php get_footer(); ?>