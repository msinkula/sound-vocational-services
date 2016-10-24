<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>

<!-- Begin Content -->
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(''); ?>
<?php endwhile; endif; ?>
<?php $page_excerpts = array('post_type' => 'page','numberposts' => -1,'post_status' => null,'post_parent' => 7,'order' => 'ASC','orderby' => 'menu_order'); $child_pages = get_posts($page_excerpts);  ?> 
<?php foreach ($child_pages as $post) : setup_postdata($post); // get child page titles and excerpts ?>
    <article id="page-excerpt-<?php the_ID(); ?>" class="page-excerpt">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> &raquo;</a></h2>
    <?php the_excerpt(); ?>
    <p class="full-story"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Read More &raquo;</a></p>
    </article>
<?php endforeach; ?>       
</div>
<!-- End Content -->

<?php get_footer();?>