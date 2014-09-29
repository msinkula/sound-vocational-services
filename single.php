<?php get_header(); ?>

<!-- BEGIN CONTENT -->
<div id="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="post" id="post-<?php the_ID(); ?>">
    <h1><?php the_title(); ?></h1>
    <p class="postdata">Posted <?php the_time('M j, Y') ?></p>    
    <?php /*add_flexslider();*/ ?>
    <?php the_content(''); ?> 
</article>
<p class="post-navigation-previous"><?php next_post_link('&laquo;&nbsp;%link'); ?></p>
<p class="post-navigation-next"><?php previous_post_link('%link&nbsp;&raquo'); ?></p>
<?php /*comments_template();*/ ?>
<?php endwhile; ?>
<?php endif; ?>
</div>
<!-- END CONTENT -->

<?php get_footer();?>