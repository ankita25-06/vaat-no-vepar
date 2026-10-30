<?php get_header(); ?>
<main class="w" style="padding:64px 20px">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div><?php the_content(); ?></div>
  </article>
<?php endwhile; else : ?>
  <p>Nothing found.</p>
<?php endif; ?>
</main>
<?php get_footer(); ?>
