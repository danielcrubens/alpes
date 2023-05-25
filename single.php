<?php get_header(); ?>
<section class="news-single-alpes">

<section class="d-flex justify-content-center m-auto align-items-center mt-5">
    <img loading="lazy" class="img-fluid position-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imagens/logo-alpes.webp" alt="Logo Alpes">
  </section>

  <section class=" bg-alpes d-flex justify-content-center m-auto align-items-center">
    <div class="col-xl-11">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <h1 class="text-center h1-responsive">NOTÍCIAS</h1>
        </div>
      </div>
    </div>
  </section>

	<section class="white-dark bg-sole">
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
							<div class="col-xl-4 col-md-5 mt-5 mt-md-5 sidebar-single">
                <?php get_sidebar(); ?>
							</div>
          <?php endwhile;
          endif; ?>
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