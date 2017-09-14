<div class="listado-entradas">

<?php

function mscEntradasRecientes(){
/*==================================*/
    /**
     * The WordPress Query class.
     * @link http://codex.wordpress.org/Function_Reference/WP_Query
     *
     */
    $args_10 = array(
        'post_type' => 'any',
        'post_status' => 'publish',
        //Order & Orderby Parameters
        'order'               => 'DESC',
        'orderby'             => 'date',
        //Pagination Parameters
        'posts_per_page'         => 8,
    );
// The Query
$the_query = new WP_Query( $args_10);
// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
<div class="lista">
  <a href="<?php the_permalink(); ?>">
    <?php
    if(has_post_thumbnail()){
      the_post_thumbnail('medium');
    }
    else{ ?>
      <img class="attachment-medium size-medium wp-post-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pluma.jpg" alt="">
    <?php }
      ?>
    <div class="texto"><span><?php the_title(); ?></span></div>
  </a>
</div>
        <?php }} else {
        echo 'No hay artículos';
    // no se encontraron artículos
}
/* Restore original Post Data */
 wp_reset_postdata();
}

/*====== llamamos a la funcion de entradas recientes ======*/

mscEntradasRecientes();

?>
</div>
