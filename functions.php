<?php   
register_sidebars(1,array(
        'name' => 'Make the Best Use of WesWard!',
        'id' => "frontpage",
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' =>  '</h3>'    
        )
    );
register_sidebars(1,array(
        'name' => 'Footer Sidebar 1 (About)',
        'id' => "footer-1",
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' =>  '</h3>'
        ) 
    );
register_sidebars(1,array(
        'name' => 'Footer Sidebar 2 (Contact)',
        'id' => "footer-2",
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' =>  '</h3>'
        ) 
    ); 
register_sidebars(1,array(
        'name' => 'Footer Sidebar 3',
        'id' => "footer-3",
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' =>  '</h3>'
        ) 
    );     
 // index-misc right 
register_sidebars(1,array(
        'name' => 'Front Page Right Sidebar',
        'id' => "front-right",
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<div class="head"><h3>',
        'after_title' =>  '</h3></div>'
        ) 
    );
register_sidebars(1,array(
        'name' => 'Green Scene',
        'id' => "green-scene",
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<div class="head"><h3>',
        'after_title' =>  '</h3></div>'
        ) 
    );    
//join wesward team 
register_sidebars(1,array(
        'name' => 'Join WesWard',
        'id' => "join-wesward",
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<div class="head"><h3>',
        'after_title' =>  '</h3></div>'
        ) 
    );
//how to use wesward
register_sidebars(1,array(
        'name' => 'How to Use WesWard',
        'id' => "use-wesward",
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<div class="head"><h3>',
        'after_title' =>  '</h3></div>'
        ) 
    );
// how to create a student group
register_sidebars(1,array(
        'name' => 'Who is Wesward',
        'id' => "whoiswesward",
        'before_widget' => '<section class="side_box">',
        'after_widget' => '</section>',
        'before_title' => '<div class="head"><h3>',
        'after_title' =>  '</h3></div>'
        ) 
    );    
//resources sidebar
register_sidebars(1,array(
        'name' => 'Resources',
        'id' => "resources",
        'before_widget' => '<section class="side_box">',
        'after_widget' => '</section>',
        'before_title' => '<div class="head"><h3>',
        'after_title' =>  '</h3></div>'
        ) 
    ); 
//contact sidebar
register_sidebars(1,array(
        'name' => 'Contact',
        'id' => "contact",
        'before_widget' => '<section class="side_box">',
        'after_widget' => '</section>',
        'before_title' => '<div class="head"><h3>',
        'after_title' =>  '</h3></div>'
        ) 
    );     
//archive sidebar
register_sidebars(1,array(
        'name' => 'Misc. Sidebar',
        'id' => "misc_sidebar",
        'before_widget' => '<section class="side_box">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' =>  '</h3>'
        ) 
    );

//register Student Groups as a meta custom post type
add_action('init', 'add_student_group');
function add_student_group() {
    $labels = array(
        'name' => _x('Student Groups','post type general name'),
        'singular name' => _x('Student Group','post type singular name'),
        'add_new' => _x('Add New', 'event item'),
        'add_new_item' => __('Add New Group'),
        'edit_item' => __('Edit Group'),
        'new_item' => __('New Group'),
        'view_item' => __('View Group'),
        'search_items' => __('Search Groups'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in trash'),
        'parent_item_colon' => ''
    );
    $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 20,
		'supports' => array('title','editor','thumbnail')
	);
	register_post_type('group',$args);  
}
//thumbnail support     
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 225, 150 );  
add_image_size('history-image', '', '', true); 
//removes [...] from excerpt
function new_excerpt_more($more) {
       global $post;
	return '<a href="'. get_permalink($post->ID) . '">...read the rest &rarr;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
 
//pagination edit
function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; Previous</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Next &raquo;</a>";
         echo "</div>\n";
     }
} 

function home_page_menu_args( $args ) {
$args['show_home'] = true;
return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );  
add_theme_support( 'menus' );

/*limits character length for excerpt - great for the featured posts sidebar*/
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}

?>