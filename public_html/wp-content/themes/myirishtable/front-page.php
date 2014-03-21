<section class="hero-unit" style="background-image: url(/assets/img/bg.jpg)"></section>

<main class="content" role="main">
  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'roots'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content-front-page', get_post_format()); ?>
  <?php endwhile; ?>

  <?php if ($wp_query->max_num_pages > 1) : ?>
    <nav class="pagination" role="navigation">
      <?php previous_posts_link(__('&larr; Newer posts', 'roots')); ?>
      <?php next_posts_link(__('Older posts &rarr;', 'roots')); ?>
    </nav>
</main>