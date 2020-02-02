<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post page">
        <!-- column-contentainer -->
        <div class="column-container clearfix">

            <!-- text-column -->
            <div class="text-column">
                <br><br><br><?php the_content(); ?>

            </div><!-- /text-column -->
        </div><!-- /column-container -->



      <h2><?php the_title(); ?></h2>

    </article>

    <?php endwhile;

    else :
        echo '<p> No content available</p>';

    endif;

get_footer();

?>
