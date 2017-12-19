<?php
/*
  Template Name: Archive Noticias
  Template Post Type: post, page, noticias
*/
 get_header();
?>
<section class="con-general">
  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-8 con">
          <div class="interiores">
            <div class="titulo-breadcrumb">
              <div class="mapeo"><?php dimox_breadcrumbs(); ?></div>              
            </div>
            <!-- div class="titulos-page"><?php // post_type_archive_title(); ?> </div -->
            
            <?php

  $pagina_id = get_the_ID();
               ?>

            <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $args = array(
              'post_type' => 'noticias',
              'post_status' => 'publish',
              'orderby' => 'date',
              'order' => 'DESC',
//              'posts_per_page' => 4,
              'paged' => $paged,
            );



?>
<div class="srita-pastorales">

       <?php $presentaciones = new WP_Query($args); ?>

<?php if ( have_posts() ) : ?>
                    <?php while($presentaciones->have_posts() ): $presentaciones->the_post(); ?>
        <div class="list">
          <a class="ir-agrupacion" href="<?php the_permalink(); ?>">
            <div class="thumb" >
              <?php
              if(has_post_thumbnail()){
                the_post_thumbnail('full');
              }
              else{ ?>
                <img class="attachment-full size-full wp-post-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pluma.jpg" alt="">
              <?php }       ?>
            </div>
            <h3><?php the_title(); ?></h3>
          </a>
          <!--div class="exe"><?php // excerpt('15'); ?> </div -->
        </div>



                  <?php endwhile; ?>
                  <div class="navigationpresentaciones">
                      <div class="col-sm-12 inner-sm">
                        <?php custom_pagination_msc($presentaciones->max_num_pages, "", $paged); ?>
                      </div>
                  </div>

                              <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                    <p><?php _e('Ups!, no hay entradas.'); ?></p>
                    <?php endif; ?>


</div>
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
