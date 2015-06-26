<?php get_header(); ?>

<!-- site-content -->
<div class="site-content clearfix">

<div class="flexslider">
  <ul class="slides"> hello
    <li>
      <img src="<?php echo get_template_directory_uri() ?>/images/slide1.jpg" />
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri() ?>/images/slide2.jpg" />
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri() ?>/images/slide3.jpg" />
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri() ?>/images/slide4.jpg" />
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri() ?>/images/slide5.jpg" />
    </li>
    <li>
      <img src="<?php echo get_template_directory_uri() ?>/images/slide6.jpg" />
    </li>
  </ul>
</div>

<div class="home-slide">
<?php if(have_posts()) :
	while (have_posts()) : the_post();
        the_content();
        endwhile;
else :
	echo "<p>No content found</p>";
endif; ?>
</div>	
    

</div><!-- /site-content -->

<?php get_footer(); ?>