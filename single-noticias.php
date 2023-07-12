<?php get_header(); ?>

<section class="news-single-alpes">
  <section class="d-flex justify-content-center m-auto align-items-center mt-5">
    <?php get_template_part('template-parts/content', 'alpes-logo'); ?>
  </section>

  <section class=" bg-alpes d-flex justify-content-center m-auto align-items-center">
    <div class="col-xl-11">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <h1 id="scroll-heading" class="text-center h1-responsive scroll-down">NOTÍCIAS</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="white-dark bg-sole ">
    <div class="bg-cloud "></div>
    <div class="col-xl-11 col-md-11 d-flex justify-content-between m-auto align-items-center">
      <div class="container-fluid mt-10">
        <div class="row mt-5 mt-md-0 d-flex justify-content-between">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="col-xl-7 col-md-7 mt-5 custom-post">
                <h2 class="h2-responsive"><?php title_limite(); ?></h2>

                <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                <div class="d-flex justify-content-end align-items-center mt-3">
                  <span class="date-post"> <?php echo get_the_date('d/m/y'); ?></span>
                </div>
                <p class=""><?php the_content(); ?></p>
              </div>
              <div class="col-xl-4 col-md-5 mt-5 mt-md-5 sidebar-single-text d-none d-md-block">
                <?php get_sidebar(); ?>
              </div>
            <?php endwhile; ?>
          <?php else : get_404_template();
          endif; ?>
        </div>
      </div>
    </div>
    <div class="col-xl-11 py-5 d-flex justify-content-around  m-auto align-items-center custom-post">
      <div class="container-fluid pt-md-5">
        <h2 class="h2-responsive mb-3 scroll-down">Relacionadas</h2>
        <div class="row d-flex justify-content-between  align-items-center scroll-down">
          <?php
          $my_args = array(
            'post_type' => 'noticias',
            'orderby' => 'date',
            'order' => 'ASC',
            'posts_per_page' => 3,
            'categoty_name' => 'relacionadas'
          );
          $my_query = new WP_Query($my_args); ?>
          <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
              <div class="col-xl-4 col-md-4 ">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('post-thumbnail', array('class' => ' img-fluid w-100 h-100 ')); ?>
                </a>
                <div class="d-flex justify-content-between align-items-center mt-2">
                  <a href="<?php the_permalink(); ?>">
                    <h4 class="h4-responsive"><?php title_limite(); ?></h4>
                  </a>
                  <span class="date-post"> <?php echo get_the_date('d/m/y'); ?></span>
                </div>
                <a href="<?php the_permalink(); ?>">
                  <p class=""><?php the_excerpt(); ?></p>
                </a>
              </div>
          <?php endwhile;
          endif; ?>
          <?php wp_reset_query(); ?>
        </div>
      </div>
    </div>
    <div class="my-md-5 overlay-bottom">
      <div class="  d-flex m-auto py-5">
        <img loading="lazy" class="img-fluid d-flex m-auto w-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/logo-alpes-small.svg" alt="Logo Alpes">
      </div>
    </div>
  </section>
</section>
<?php get_footer(); ?>