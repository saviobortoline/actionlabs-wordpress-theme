<main>

<!-- HERO -->
<section class="hero">

  <div class="container">
    <h1 class="hero-title">Portal do Cliente</h1>
  </div>

</section>


<!-- BLOG -->
<section class="blog-section">

  <div class="container">

    <div class="blog-grid">

      <?php
	$query = new WP_Query([
 	 'post_type' => 'post',
  	 'posts_per_page' => 6,
  	 'orderby' => 'date',
 	 'order' => 'ASC'
	]);

      if($query->have_posts()):
        while($query->have_posts()):
        $query->the_post();
      ?>

      <article class="blog-card">

        <div class="card-image">

          <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('medium'); ?>
          <?php else: ?>
            <div class="image-placeholder"></div>
          <?php endif; ?>

        </div>

        <div class="card-content">

          <h3 class="card-title">
            <?php the_title(); ?>
          </h3>

          <p class="card-excerpt">
            <?php echo wp_trim_words(get_the_excerpt(),18); ?>
          </p>

          <a class="card-link" href="<?php the_permalink(); ?>">
            Leia mais »
          </a>

        </div>

      </article>

      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>

    </div>

  </div>

</section>

</main>