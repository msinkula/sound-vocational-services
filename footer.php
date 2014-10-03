<?php get_sidebar(); ?>

</div>
</div>
<!-- End Middle -->

<!-- Begin Footer -->
<div id="footer">

    <!-- Begin Footer Menu -->
    <div id="footer-menu">
    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
    </div>
    <!-- End Footer Menu --> 

	<footer id="footer-info">
	<p>&copy;<?php echo date("Y"); ?> <a href="<?php get_site_url(); ?>"><?php bloginfo('name'); ?></a>. All rights reserved. Website by: <a href="http://www.premiumdw.com/" target="_blank">Premium Design Works</a>. <span class="alignright"><?php wp_register('','...'); ?>&nbsp;&nbsp;&nbsp;<?php wp_loginout(); ?>...</span></p>
    </footer>
    
</div>
<!-- End Footer -->

<!-- Begin Analytics -->

<!-- End Analytics -->

<!--[if lt IE 9]>
<script language="JavaScript" type="text/javascript">
alert("It appears that you are using an outdated version of Internet Explorer that does not support HTML5 or CSS3.")
</script><![endif]-->

<!-- Begin WP Footer -->
<?php wp_footer(); ?>
<!-- End WP Footer -->

</body>
</html>