<?php

get_header();


if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <p class="post-info"><?php the_time('F jS, Y'); ?> | By <a href="<?php echo get_author_posts_url('http://localhost/webone/index.php/about-us/'); ?>"><?php the_author(); ?></a> | Posted in

            <?php

            $categories = get_the_category();
            $separator = ", ";
            $output = '';

            if ($categories) {
                foreach ($categories as $category) {
                    $output .= '<a href="https://thoughtcatalog.com/rania-naim/">' . '</a>' . $category->cat_name . $separator;

                }

                echo trim($output, $separator);
            }
             ?>
           </p>

        <p>
        <?php the_content('Continue reading &raquo'); ?>
        <a href="<?php the_permalink(); ?>"</a>
        </p>
    </article>

    <?php endwhile;

    else :
      echo '<p>No content available</P>';

    endif;

get_footer();

 ?>
