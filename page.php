
<?php get_header(); ?>


<section class="row">
      <div class="small-12 columns text-center">
        <div class="leader">

          <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- startar loopen -->
          <!-- om det finns posts postar dden den hela content -->

          <h1><?php the_title(); ?></h1>  <!-- dinamic tags -->
          <hr>
          <p><?php the_content(); ?></p>  <!-- dinamic tags -->

          <?php endwhile; else :?>
          <!-- om det finns inga posts så skriver den bara denna p taggen -->
          <p><?php _e('Sorry, no page found.') ?></p>
        <?php endif; ?> <!-- stänger loopen -->

        </div>

      </div>
    </section>



<?php get_footer(); ?>
