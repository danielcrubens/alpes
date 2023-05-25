<?php
?>
<?php get_header(); ?>
<section class="news-alpes ">
  <section class="d-flex justify-content-center m-auto align-items-center mt-5">
    <img loading="lazy" class="img-fluid position-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imagens/logo-alpes.webp" alt="Logo Alpes">
  </section>

  <section class=" bg-alpes d-flex justify-content-center m-auto align-items-center">
    <div class="col-xl-11">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <h1 class="text-center h1-responsive">NOTÍCIAsssS</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="white-dark bg-sole">
    <div class="bg-cloud "></div>
    <div class="col-xl-11 col-md-11 py-md-5 d-flex justify-content-between m-auto align-items-center">
      <div class="container-fluid mt-10">
        <div class="row mt-5 mt-md-0 d-flex justify-content-between">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="col-xl-7 col-md-7 custom-post">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                </a>
                <div class="d-flex justify-content-between align-items-center">
                  <h2 class="h2-responsive mt-3"><?php title_limite(); ?></h2>
                  <h6> <?php echo get_the_date('m/d/y'); ?></h6>
                </div>
                <p class="d-block mt-5"><?php the_excerpt(); ?></p>
              </div>

              <div class="col-xl-4 col-md-5 mt-5 mt-md-0 sidebar">

                <?php get_sidebar(); ?>
              </div>
        </div>
    <?php endwhile;
          endif; ?>

      </div>
    </div>
  </section>










  <style>
    /*   .custom-post {
    margin-bottom: 4rem; 
    line-height: 1.2; 
  } */
  </style>

  <?php get_footer(); ?>