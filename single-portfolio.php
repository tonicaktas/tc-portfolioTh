
<?php get_header(); ?>


<section class="two-column row no-max pad">
      <div class="small-12 columns">
        <div class="row">
          <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- startar loopen -->
          <!-- om det finns posts postar dden den hela content -->
          <!-- Primary Column -->
          <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
            <div class="primary">


              <?php the_field('images'); ?>

          </div>
        </div>

        <!-- Secondary Column -->
        <div class="small-12 medium-4 medium-pull-8 columns">
          <div class="secondary">

            <h1><?php the_title(); ?></h1>  <!-- dinamic tags -->

            <p><?php the_field('description'); ?></p>  <!-- dinamic tags -->

              <hr>
                <p>
                  <?php previous_post_link(); //länka till föregående post?> -
                  <a href="<?php bloginfo('url'); //url av sidan ?>/portfolio"><!--länka till /portfolio -->Back to Portfolio</a> -
                  <?php next_post_link(); // länka till nästa post?>

                </p>
          </div>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </section>


<?php get_footer(); ?>
