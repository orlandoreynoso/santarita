<?php
/*
Template Name: coverPage Santa rita
 */
?>
<?php get_header(); ?>
<div class="slide">
    <div class="row">
      <div class="col-md-12">
        <?php include (TEMPLATEPATH . '/libs/banner.php');   ?>
      </div>
    </div>
</div>
<section class="section-bienvenida">
  <div class="container">
    <div class="row">
      <div class="col-md-12 gridx">
        <div class="i-bienvenida">
            <h3><?php bloginfo('title'); ?></h3>
        </div>
        <?php // get_template_part( 'template/cover','bienvenidos' ); ?>
        <?php
          while ( have_posts() ) : the_post();
            the_content();
          endwhile;
        ?>
      </div>
    </div>
  </div>
</section>

<section class="m-remodelacion">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <article>
        <?php get_template_part( 'template/cover','remodelacion' ); ?>
      </article>
    </div>
  </div>
</div>
</section>

<section class="m-iparroquial">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <article>
        <?php include (TEMPLATEPATH . '/libs/infoparroquial.php');  ?>
      </article>
    </div>
  </div>
</div>
</section>

<section class="m-entradas-recientes">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="titulo-entradas-reciente">
        <h3>Entradas Recientes</h3>
      </div>
      <article class="listado-entradas">
        <?php get_template_part( 'template/cover','entradasrecientes' ); ?>
      </article>
    </div>
  </div>
</div>
</section>



<?php get_footer(); ?>
