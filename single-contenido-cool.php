<?php
/*
  Template Name: single Contenido cool
  Template Post Type: post, page, product, pastorales
*/
 get_header();
?>
<section class="con-general">
  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-8 con">
          <div class="interiores">
            <div class="titulo">
              <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>
            </div>
            <?php  echo  'estoy en single contenido cool';      ?>
            <?php
              while ( have_posts() ) : the_post();
                the_content();
              endwhile;
            ?>
          </div>
       </div>
        <div class="col-xs-12 col-md-4 side">
          <div class="entradas">
            <div class="titulo_entradas">
              <h3>Entradas recientes</h3>
            </div>
            <div class="recientes">
              <?php get_sidebar(); ?>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
<?php get_footer();  ?>
