<!-- On réccupère le contenu du header.php -->

<?php get_header('articles'); ?>

<!-- Body de Emma -->

	
  <!-- Code de BRICE -->
  <h1>Consultez les articles :</h1>
  
<div class="parent">

  <?php    
      $recent_posts = wp_get_recent_posts(array(        
        'numberposts' => 4, 
      // Number of recent posts thumbnails to display        
      'post_status' => 'publish' // Show only the published posts    
    ));
    
 // var_dump($recent_posts);
foreach($recent_posts as $post) : ?>  
<div class="a1">     
            
  <a href="<?php echo get_permalink($post['ID']) ?>">                 
    <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail'); ?>                
                   
    <p class="slider-caption-class"><?php echo $post['post_title'] ?></p>            
  </a> 
  <?php echo $post['post_excerpt'];   ?>
    </div> 
       
  <?php endforeach; wp_reset_query(); 

?>

</div>
  
  
  <!-- FIN du Code de BRICE -->
  
 <?php get_footer(); ?>
