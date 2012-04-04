<nav id="category_nav" class="category_box">
<div class="head">
    <h3>I am interested in:</h3>   
    <small>(check all that apply)</small> 
</div>                                  
<ul>
<?php
  $categories = get_categories(array(
      'orderby' => 'name',
       'hide_empty' => 0,
       'exclude' => array(8,9,31),/*Featured,History*/
       'use_desc_for_title' => false,
       'title_li' => ''                            
      )
   );
  foreach ($categories as $cat) {
  echo '<a href="'.get_option('home').'/category/'.$cat->category_nicename.'/"><li>'.$cat->cat_name.'</li></a>';
  }
?>  
    </ul>
</nav> 