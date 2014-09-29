<?php get_header(); ?>

<!-- Begin Content -->
<div id="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<article class="post-box" id="post-box-<?php the_ID(); ?>">
    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?> &raquo;</a></h2>
    <p class="postdata">Posted on <?php the_time('M j, Y') ?></p>
    <?php the_excerpt(); ?>
    <p class="full-story"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Full Story &raquo;</a></p>
    </article>
<?php endwhile; ?>
<?php endif; ?>
<p class="post-navigation-previous"><?php previous_posts_link('&laquo; Newer Postings'); ?></p>
<p class="post-navigation-next"><?php next_posts_link('Older Postings &raquo;'); ?></p>
</div>
<!-- End Content -->

<?php get_footer();?>