<?php get_header(); ?>

<!-- BEGIN CONTENT -->
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" class="post-content">
    <h1><?php the_title(); ?></h1>
    <p class="post-data">Posted <?php the_time('M j, Y') ?></p> 
	<?php if(has_post_thumbnail()) { echo get_the_post_thumbnail($post->ID, 'large'); }?>
	<?php the_content(''); ?> 
    <ul class="post-navigation">
    <li class="post-navigation-previous"><?php next_post_link('&laquo;&nbsp;%link'); ?></li>
    <li class="post-navigation-next"><?php previous_post_link('%link&nbsp;&raquo'); ?></li>
    </ul>
	</article>
<?php endwhile; endif; ?>
</div>
<!-- END CONTENT -->

<?php get_footer();?>