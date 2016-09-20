


<?php

  $num_posts = ( is_front_page() ) ? 2 : -1; // om front-page = visa första sifran om inte visa alla

  $args = array('post_type' => 'portfolio','posts_per_page' => $num_posts); //parameter that we want to pass to WP_Query
  $query = new WP_Query( $args );// special function that lets us specify what we want a specific loop to display on a page
?>

<section class="row no-max pad">

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

  <div class="small-6 medium-4 large-3 columns grid-item">
    <a href="<?php the_permalink(); ?> "><?php the_post_thumbnail('large'); ?></a>
  </div>

<?php endwhile; endif; wp_reset_postdata(); ?>

</section>
