<?php /* Custom Search */   
   get_header('search');

        // on recup search text de l'url
        if($_GET['s'] && !empty($_GET['s']))
        {
            $text = $_GET['s'];
        }
        // on recup le type de l'url
        /*if($_GET['type'] && !empty($_GET['type']))
        {
            $type = $_GET['type'];
        }*/

?>

<div class="container mt-3">
    <h4>Searching for ... <?php echo $text; ?></h4>
        <?php
            $args = [
                // equals the variable - si on met rien dans les post_type alors on reccupere post
                'post_type' => $type ?? 'any',

                // unlimited no pagination 
                // 'posts_per_page' => -1,
                // using wp search variable
                's' => $text,
                /*'exact' => true,
                'sentence' => true*/
            ];
            $query = new WP_Query($args);
            // on reccupères les posts et les affiche de façon dynamique
            while($query->have_posts()) : $query->the_post();   
        ?>

    <div class="post clearfix">
        <hr noshade width="100%" class="bg-secondary" align="left">
            <h5 class="font-weight-bold"><a href="<?= get_permalink();?>"><?= get_the_title()?></a></h5>
                <p class="font-italic"><?php echo apply_filters( 'the_excerpt', $post->post_excerpt ); ?></p>
                    <strong class="font-italic">
                        <?php if(get_post_type() == 'post')
                            if(get_post_type() == 'produit')?> 
                    </strong>
    </div>
        <!-- fin de la boucle -->
        <?php endwhile; wp_reset_query(); ?>
    <strong class="text-danger pagination"><?= get_the_posts_pagination()?></strong>
</div>

<?php get_footer(); ?>