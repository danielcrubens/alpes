<?php
/*Template Name: Sobre */
?>
<?php get_header(); ?>
<section class="about-alpes">
  <section class="d-flex justify-content-center m-auto align-items-center mt-5">
    <?php get_template_part('template-parts/content', 'alpes-logo'); ?>
  </section>

  <section class=" bg-alpes d-flex justify-content-center m-auto align-items-center">
    <div class="col-xl-11">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <h1 id="scroll-heading" class="text-center h1-responsive scroll-top">SOBRE</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="white-dark bg-cloud-overlay">
    <div class="bg-cloud "></div>
    <div class="col-xl-10 col-md-10 d-flex justify-content-center m-auto align-items-center">
      <div class="container-fluid scroll-down my-5">
        <div class="row mt-md-5">
          <div class="col-md-3 mb-5 mb-md-0 d-flex justify-content-center d-lg-flex justify-content-lg-start">
            <img class="img-fluid" src="<?php the_field('imagem-sobre-1'); ?>" alt="Grupo Alpes">
          </div>
          <div class="col-md-3 mb-5 mb-md-0 d-flex justify-content-center d-lg-flex justify-content-lg-center">
            <img class="img-fluid d-flex m-auto" src="<?php the_field('imagem-sobre-2'); ?>" alt="Grupo Alpes">
          </div>
          <div class="col-md-6 mb-5 mb-md-0 d-flex justify-content-center d-lg-flex justify-content-lg-end">
            <p class=""><?php the_field('texto-sobre') ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex scroll-down">
      <a class="btn-alpes m-auto">CONHEÇA NOSSOS SERVIÇOS</a>
    </div>
    <div class="my-5">
      <div class="  d-flex m-auto py-5">
        <img loading="lazy" class="img-fluid d-flex m-auto w-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/logo-alpes-small.svg" alt="Logo Alpes">
      </div>
    </div>
  </section>
</section>
<?php get_footer(); ?>