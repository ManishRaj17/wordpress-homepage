<?php get_header(); ?>
<main>
  <section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg');">
    <div class="overlay">
      <h1>Welcome to Our Website</h1>
      <p>Your success starts here.</p>
      <a href="#contact" class="cta-button">Contact Us</a>
    </div>
  </section>

  <section class="testimonials">
    <h2>What Our Clients Say</h2>
    <div class="testimonial-grid">
      <?php
      $args = ['post_type' => 'testimonial', 'posts_per_page' => 3];
      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
      ?>
        <div class="testimonial">
          <?php the_post_thumbnail(); ?>
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
