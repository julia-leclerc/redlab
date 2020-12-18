<?php
  get_header('search');
?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<h2 class="card-title mt-3 text-primary text-center"><?php the_title();?></h2>
	  <div class="bg-light w-75 text-center m-auto"><? the_content(); ?></div>
	  <div class="font-italic font-weight-bold ml-3">Written by : <?php the_author() ?></div>
    <div class="font-italic font-weight-bold ml-3">Date : <?php the_date(); ?></div>
    
	<?php endwhile; ?>
  <?php endif; ?>
<!-- a tester -->

<p class="font-italic font-weight-bold ml-3">Commentaires :<?php comments_template(); ?> </p>

<div class="parent">

  <?php    
      $recent_posts = wp_get_recent_posts(array(        
        'numberposts' => 3, 
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
<?php get_footer(); ?>