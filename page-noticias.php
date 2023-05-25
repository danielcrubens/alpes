<?php
/*Template Name: Noticias */
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
      <div class="container-fluid mt-10  ">
        <div class="row mt-5 mt-md-0 d-flex justify-content-between">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="col-xl-7 col-md-7 ">
                  <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                </a>
            <div class="d-flex justify-content-between align-items-center">
              <h2 class="h2-responsive"><?php title_limite(); ?></h2>
              <h6>Hard Rock Café</h6>
            </div>
            <p class="d-block mt-5"><?php the_excerpt(); ?></p>

          </div>
          <div class="col-xl-4 col-md-5 mt-5 mt-md-0 sidebar">
            <h2 class="h2-responsive">Nossas Redes </h2>
            <p>terdum sollicitudin erat. Nunc a ligula erat. Aliquam dolor arcu, posuere ac sapien sed, suscipit vehicula mi. Quisque eleifend diam sit amet enim dignissim eleifend.</p>
            <div class=" mt-3 social-alpes">
              <a class="mr-3" href="http://" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-linkedin "></i>
              </a>
              <a class="mr-3" href="http://" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-facebook-square"></i>
              </a>
              <a class="mr-3" href="http://" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-twitter-square"></i>
              </a>

              <a class="mr-3" href="http://" target="_blank" rel="noopener noreferrer">

                <i class="fab fa-whatsapp-square"></i>
              </a>
            </div>
            <div class="news-form">
              <?php echo do_shortcode('[contact-form-7 id="12" title="Formulário de contato 1"]'); ?>
            </div>
          </div>
          <?php endwhile; endif; ?>

        </div>
      </div>
    </div>
  </section>

</section>
<?php get_footer(); ?>