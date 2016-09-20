
<?php
/*
    Template Name: Left Sidebar
*/

?>

<?php get_header(); ?>


<section class="two-column row no-max pad">
      <div class="small-12 columns">
        <div class="row">
          <!-- Primary Column -->
          <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
            <div class="primary">

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

        <?php get_sidebar('page'); ?>
    </div>
  </section>


<?php get_footer(); ?>
