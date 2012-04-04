<?
/*
Template Name: Student Groups
*/
?>
<?php get_header(); ?>
<div id="main" class="container">
    <div class="row">
        <aside id="left_sidebar" class="threecol">
            <section>  
                	<?php if ( !function_exists('dynamic_sidebar')
                	|| !dynamic_sidebar('whoiswesward') ) : ?>
                	<?php endif; ?>                         
            </section>
        </aside>
        <section id="main_content" class="ninecol last">
            <header>
                <h1>Student Groups</h1>
            </header> 
            <nav id="alphabet">  
                <ul>
                    <a href="#A"><li>A</li></a> 
                    <a href="#B"><li>B</li></a>
                    <a href="#C"><li>C</li></a>
                    <a href="#D"><li>D</li></a> 
                    <a href="#E"><li>E</li></a> 
                    <a href="#F"><li>F</li></a> 
                    <a href="#G"><li>G</li></a> 
                    <a href="#H"><li>H</li></a>
                    <a href="#I"><li>I</li></a>
                    <a href="#J"><li>J</li></a>
                    <a href="#K"><li>K</li></a>
                    <a href="#L"><li>L</li></a>     
                    <a href="#M"><li>M</li></a>
                    <a href="#N"><li>N</li></a>
                    <a href="#O"><li>O</li></a> 
                    <a href="#P"><li>P</li></a> 
                    <a href="#Q"><li>Q</li></a> 
                    <a href="#R"><li>R</li></a> 
                    <a href="#S"><li>S</li></a> 
                    <a href="#T"><li>T</li></a> 
                    <a href="#U"><li>U</li></a>
                    <a href="#V"><li>V</li></a> 
                    <a href="#W"><li>W</li></a>
                    <a href="#X"><li>X</li></a>
                    <a href="#Y"><li>Y</li></a> 
                    <a href="#Z"><li>Z</li></a>
                </ul>
            </nav>       
            <article class="content">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   
                <header>
                     <?php the_content(); ?>
    				<?php endwhile; else: endif;?>             
                </header> 
                <ul>  
                    <?php
                        $args = array(
                            'post_type' => 'group',
                            'posts_per_page' => 26,
                            'orderby' => 'title',
                            'order' => 'ASC' 
                        );
                        $loop = new WP_Query($args);
                        while ($loop -> have_posts()) : $loop -> the_post();
                    ?>
                    <h3><div id="<?php the_title(); ?>"><?php the_title(); ?></div></h3>
                    <?php the_content(); ?>
                    <a href="#container" class="topLink">Back to top &uarr;</a>
                    <?php endwhile; ?>               
                </ul>
            </article>                                                    
        </section>  
    </div>                                                
</div>
<?php get_footer(); ?>