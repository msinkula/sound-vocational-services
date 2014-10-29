<?php get_header(); ?>

<!-- START CONTENT -->
<div id="content">
<h1>Search Results:</h1>
<?php if (have_posts()) : ?>
    <p>Here's what we found for you...</p>
    <?php while (have_posts()) : the_post(); ?>
    <article class="page-excerpt" id="page-excerpt-<?php the_ID(); ?>">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); // page excerpts ?>
    <p class="full-story"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Read More &raquo;</a></p>
    </article>
	<?php endwhile; ?>
<?php else : ?>
    <p>No posts found. Try a different search?</p>
    <?php get_search_form(); ?>
<?php endif; ?> 
</div>
<!-- END CONTENT -->

<?php get_footer(); ?>