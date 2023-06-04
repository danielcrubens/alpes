<?php
/*
 * Single Empresas Template
 * Description: Custom template to display a single book.
 */

get_header();

while (have_posts()) :
    the_post();
    ?>
    <article class="red" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="entry-title"><?php the_title(); ?></h2>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>
<?php
endwhile;

get_footer();
?>
