<!-- On réccupère le contenu du header.php -->

<?php get_header(); ?>

<!-- Body de Emma -->


  
  <!-- Code de BRICE -->
  <h1>Derniers articles :</h1>
  <div class="bg"></div>
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
  
  <div class="move">
    
    <button class="download"><a href="http://jleclerc.alwaysdata.net/articles">Voir les articles</a></button>
    
  </div>
  <!-- FIN du Code de BRICE -->
   
 <section class="all1">

<div><img src="<?php bloginfo('template_url');?>/img/block.jpg"></div>


<div class="t1">
  <h4> BIG DATA </h4>
      <p>L’ augmentation exponentielle des données
est, en particulier, portée par les objets intelligents, qui seront plus de 50 milliards
dans le monde en 2020. À cette échéance,
ce sont 40 000 milliards de milliards de données qui seront générées… Davantage que d’étoiles dans l’Univers!
Ces données, il nous faudra les collecter puis savoir les
compter, les identifier et les isoler, mais aussi les mettre
en relation les unes avec les autres à tout moment, et
donner des ordres aux différents objets. C’est le premier
défi à relever. Pour y parvenir, il faut des machines
d’une puissance exceptionnelle, les supercalculateurs,
et des logiciels de nouvelle génération, qui fonctionnent
différemment de l’informatique que nous mettons en
œuvre depuis 30 ans et dont le « batch » est la base.
Finie l’époque où les informaticiens avaient le temps de
sauvegarder les données, de les restaurer ou de relancer
un traitement en cas de panne. Désormais les systèmes
sont temps réel ou presque et apprennent de façon autonome.</p>

</div>
	

</section>

<?php get_footer(); ?>