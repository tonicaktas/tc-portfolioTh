<?php
/*
  Template Name: Portfolio page

*/
?>
<?php get_header(); ?>


<section class="row">
      <div class="small-12 columns text-center">
        <div class="leader">

          <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- startar loopen -->
          <!-- om det finns posts postar dden den hela content -->

          <h1><?php the_title(); ?></h1>  <!-- dinamic tags -->

          <?php the_content(); ?>  <!-- dinamic tags -->

        <?php endwhile; endif;  ?>

        </div>

      </div>
    </section>



  <?php get_template_part('content','portfolio'); // hämtar del från content-portfolio?> 




<?php get_footer(); ?>
