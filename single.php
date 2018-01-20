<?php
/*
Template Name: Single Pages
*/
?>
<?php get_header(); ?>
      <!-- START THE FEATURETTES -->

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<ul class="post-meta">
  <li id="post-date"><?php the_time('F jS, Y') ?></li><div style="clear:both"></div>
</ul>
<h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h1>
<?php the_content() ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></p>
<?php endif; ?>

<?php get_footer(); ?>