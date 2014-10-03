<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>

<!-- Begin Content -->
<div id="content">

    <!-- Begin Content Loop -->
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(''); ?>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- End Content Loop -->

    <!-- Begin Services Loop -->
    <?php rewind_posts(); // stop loop one ?>
    <?php /*query_posts('showposts=5');*/ // show 5 latest posts ?>
    <?php query_posts(array('post_type' => 'page','post_parent' => 7, 'order' => ASC, 'orderby' => 'menu_order')); // show the excerpts from the services page ?>    
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article class="post-box" id="post-box-<?php the_ID(); ?>">
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?> &raquo;</a></h2>
        <!-- <p class="postdata">Posted on <?php the_time('M j, Y') ?></p> -->
        <?php the_excerpt(); ?>
        <p class="full-story"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Read More</a>&nbsp;&raquo;</p>
        </article>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- End Services Loop -->
    
    <!-- <p class="post-navigation-next"><a href="../news/">More News</a>&nbsp;&raquo;</p> -->
        
</div>
<!-- End Content -->

<?php get_footer();?>