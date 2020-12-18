<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:400,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="normalize.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Chargement CSS avec chemin custom -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <!-- Chargement de la font -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

      <!-- Affichage du menu dynamique -->
      <nav class="background navbar-expand{-sm|-md|-lg|-xl}">
        <ul class="nav justify-content-center ">
          <?php
            wp_nav_menu(array(
              'theme_location' => 'main',
              'menu_class' => 'nav',
            ));
          ?>
        </ul>
      </nav>
	<?php wp_head(); ?>
</head>