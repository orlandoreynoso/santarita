<div class="texto-bienvenida">
  <?php $the_query = new WP_Query(contenidosPorNombre('page','parroquia-en-marcha/remodelacion-de-nuestro-templo',1));
  while ($the_query -> have_posts()){


    $the_query -> the_post();
/*
    echo $id = get_the_ID();
    echo $nombre = get_the_title(); */
  ?>
  <div class="title-recomendacion">
      <h3><?php the_title(); ?></h3>
  </div>
  <div class="contenidos-c oracion">
    <?php

      the_excerpt();
      ?>
      <a class="thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
      <a class="link" href="<?php the_permalink(); ?>">Leer texto completo</a>
      <?php
    }
    wp_reset_postdata();
    ?>
  </div>
</div>
