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
        <div class="texto-bienvenida">
          <?php $the_query = new WP_Query(contenidosPorNombre('page','bienvenida-rectoria-santa-rita',1));  ?>
          <div class="contenidos-c oracion">
            <?php
            while ($the_query -> have_posts()){
              $the_query -> the_post();
              the_content( );
            }
            wp_reset_postdata();
            ?>
          </div>
        </div>
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


<section class="con-general">
  <div class="container">
     <div class="row">
        <div class="col-xs-12 col-md-8 con">
          <div class="interiores">
            <?php //  echo  'estoy en cover page';      ?>
            <?php
              while ( have_posts() ) : the_post();
                the_content();
              endwhile;
            ?>
          </div>
       </div><!-- FINALIZA DIV CON -->
        <div class="col-xs-12 col-md-4 side">
          <div class="entradas">
            <div class="titulo_entradas">
              <h3>Entradas recientes</h3>
            </div>
            <div class="recientes">
              <?php get_sidebar(); ?>
            </div>
          </div>
        </div><!-- finaliza side  -->
     </div>
  </div>
</section><!-- finaliza section con-general  -->

<section class="m-recomendaciones">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <article>
        <?php get_template_part( 'template/cover','recomendaciones' ); ?>
      </article>
    </div>
  </div>
</div>
</section>


<!-- section class="msc-agrupaciones">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <article>
        <?php // include (TEMPLATEPATH.'/libs/agrupaciones.php');  ?>
      </article>
    </div>
  </div>
</div>
</section -->
<?php get_footer(); ?>
