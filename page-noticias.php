<?php
/*Template Name: Noticias
*/
?>
<?php get_header(); ?>
<section class="news-alpes">
  <section class="d-flex justify-content-center m-auto align-items-center mt-5">
    <?php get_template_part('template-parts/content', 'alpes-logo'); ?>
  </section>

  <section class=" bg-alpes d-flex justify-content-center m-auto align-items-center">
    <div class="col-xl-11">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <h1 id="scroll-heading" class="text-center h1-responsive scroll-top">NOTÍCIAS</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="white-dark bg-sole">
    <div class="bg-cloud "></div>
    <div class="col-xl-11 col-md-11  d-flex justify-content-between m-auto align-items-center">
      <div class="container-fluid mt-10 scroll-down">
        <div class="row mt-5 mt-md-0 d-flex justify-content-between">
          <?php
          $args = array(
            'post_type' => 'noticias',
            'posts_per_page' => -1,
          );

          $my_query = new WP_Query($args);

          if ($my_query->have_posts()) :
            while ($my_query->have_posts()) :
              $my_query->the_post();
          ?>
              <div class="col-xl-7 col-md-7 mt-5 custom-post scroll-down">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                </a>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <a href="<?php the_permalink(); ?>">
                    <h2 class="h2-responsive"><?php title_limite(); ?></h2>
                  </a>
                  <span class="date-post"> <?php echo get_the_date('d/m/y'); ?></span>
                </div>
                <a href="<?php the_permalink(); ?>">
                  <p class=" py-md-1"><?php the_excerpt(); ?></p>
                </a>
              </div>
          <?php endwhile;
          endif; ?>
          <div class="col-xl-4 col-md-5 mt-5 mt-md-5  position-sidebar sidebar d-none d-md-block">
             <div class="">
              <?php get_template_part('template-parts/content', 'sidebar-noticias'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>



<?php get_footer();
