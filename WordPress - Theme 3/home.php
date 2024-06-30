<?php get_header(); ?>

<div id="pagewrapper">

<a data-fancybox-group="fancybox[group]" class="fancybox-content fancybox-hidden" href="#important">Information</a> 


<div class="home_content_inside">


<div class="home-div">
    <?php wp_nav_menu( array( 'theme_location' => 'home-menu', 'container_class' => 'menu-home-menu' ) ); ?>
</div>

<div id="load_more_container">

<div class="big_post_fixed">
      <?php get_calendar(true); ?>
</div>

<div class="big_post post_box_gigantic">
<div id="slider-div">
<ul class="rslides">
  <li><img src="../wp-content/themes/philiptheme/images/photos/_66A2708.jpg" alt=""></li>
  <li><img src="../wp-content/themes/philiptheme/images/photos/_DSC1612.jpg" alt=""></li>
  <li><img src="../wp-content/themes/philiptheme/images/photos/_66A0368.jpg" alt=""></li>
  <li><img src="../wp-content/themes/philiptheme/images/photos/_66A2896.jpg" alt=""></li>
</ul>
<div id="navContainer">
</div>
</div>
</div>

<div class="big_post_fixed">

<h2>Popular Tags</h2>
<ul>
<li>
<?php wp_tag_cloud( 'smallest=8&largest=22' ); ?>
<?php wp_list_categories(); ?>
</li>
</ul>
</div>

    <?php $x = 0; ?>
    <?php while (have_posts()) : the_post(); ?>
<div class="post_box">
    <?php if($x % 2 == 0) { ?>
      <h3>
    <?php } else { ?>
      <h3 class="gray">
    <?php } ?>
      <a href="<?php the_permalink(); ?>">
    <?php echo substr(get_the_title(),0,200); ?>
      </a> </h3>
    <?php if(has_post_thumbnail()) { ?>
    <?php the_post_thumbnail('featured-home-small'); ?> 
    <?php echo substr(get_the_excerpt(),0,2000); ?>
      <div class="posted"><div class="posted-time"><?php the_time('H:i:s'); ?> ~ <?php the_time('d-m-Y'); ?></div>
      <div class="posted-tags"><?php the_tags(); ?></div>
      </div>
    <?php } else { ?>
    <?php echo substr(get_the_excerpt(),0,2000); ?>
      <div class="posted"><div class="posted-time"><?php the_time('H:i:s'); ?> ~ <?php the_time('d-m-Y'); ?></div>
      <div class="posted-tags"><?php the_tags(); ?></div>
      </div>
    <?php } ?>
</div>
    <?php $x++; ?>
    <?php endwhile; ?>
    <?php if(get_next_posts_link() != '') { ?>
  
  <!--//load_more_cont-->
  
    <?php } ?>
</div>

<div class="load-button"><?php next_posts_link('Load More') ?></div>

</div>

<?php wp_reset_query(); ?>

</div> <!-- pagewrapper -->
    <?php get_footer(); ?>

    <?php // get_sidebar('nice-bar'); ?>
