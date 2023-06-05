<?php get_header(); ?>

<section class="news-single-alpes">
  <section class="d-flex justify-content-center m-auto align-items-center mt-5">
    <img loading="lazy" class="img-fluid position-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imagens/logo-alpes.webp" alt="Logo Alpes">
  </section>

  <section class=" bg-alpes d-flex justify-content-center m-auto align-items-center">
    <div class="col-xl-11">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <h1 class="text-center h1-responsive">CASES</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="white d-flex justify-content-center m-auto align-items-center">
    <div class="col-xl-11 ">
      <div class="container-fluid">
        <div class="row">
          <h2 class="h2-responsive py-4"><?php title_limite(); ?></h2>
          <p><?php the_content(); ?></p>
        </div>
      </div>
    </div>
  </section>
</section>

<?php get_footer(); ?>