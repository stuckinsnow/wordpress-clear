<?php

/*

  Template Name: Blog

*/

?>



<?php get_header(); ?>



        <div id="single_left">



            <?php

            $args = array(

                         'category_name' => 'blog',

                         'post_type' => 'post',

                         'posts_per_page' => 5,

                         'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)

                         );

            query_posts($args);

            $x = 0;

            while (have_posts()) : the_post(); ?>

            

            <div class="blog_box">

                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-image'); ?></a>

               

				

				<p><?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,330)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content; ?><?php if(strlen(strip_tags(get_the_content())) > 330) echo "[.....]"; ?></p>

				

            </div><!--//blog_box-->            

            

            <?php endwhile; ?>

            

            <div class="navigation">

                <div class="left"><?php previous_posts_link('&laquo; Previous') ?></div>

                <div class="right"><?php next_posts_link('Next &raquo;') ?></div>

                <div class="clear"></div>

            </div><!--//navigation-->

            

            <?php wp_reset_query(); ?>

        </div><!--//single_left-->

        

        <?php get_sidebar(); ?>

        

        <div class="clear"></div>

        

<?php get_footer(); ?>        