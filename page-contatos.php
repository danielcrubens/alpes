<?php
/*Template Name: Contatos */
?>
<?php get_header(); ?>
<section class="contacts-alpes">
  <section class="d-flex justify-content-center m-auto align-items-center mt-5">
    <img loading="lazy" class="img-fluid position-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imagens/logo-alpes.webp" alt="Logo Alpes">
  </section>

  <section class=" bg-alpes d-flex justify-content-center m-auto align-items-center">
    <div class="col-xl-11">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <h1 class="text-center h1-responsive">CONTATOS</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="white-dark bg-sole">
    <div class="bg-cloud "></div>
    <div class="col-xl-11 col-md-11 py-5 d-flex justify-content-center m-auto align-items-center">
      <div class="container-fluid mt-10">
        <div class="row">
          <div class="col-xl-5 col-md-6">
            <h2 class="h2-responsive">CONTATO</h2>
            <p>terdum sollicitudin erat. Nunc a ligula erat. Aliquam dolor arcu, posuere ac sapien sed, suscipit vehicula mi. Quisque eleifend diam sit amet enim dignissim eleifend.
              terdum sollicitudin erat. Nunc a ligula erat. Aliquam dolor arcu, posuere ac sapien sed, suscipit vehicula mi. Quisque eleifend diam sit amet enim dignissim eleifend</p>
              <div class=" mt-4">
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

          </div>
          <div class="col-xl-7 col-md-6">
            <?php echo do_shortcode('[contact-form-7 id="12" title="Formulário de contato 1"]'); ?>
          </div>
        </div>
      </div>
    </div>
    <div class=" mt-md-5 d-flex justify-content-center align-items-center">
      <h2 class="h2-responsive py-5 text-center text-md-left py-4 py-md-0 first-step">DÊ O SEU PRIMEIRO <span class="px-2 bg-blue">PASSO</span></h2>
    </div>
    <div class="mt-10 overlay-bottom">
      <div class="d-flex m-auto py-5">
        <img loading="lazy" class="img-fluid d-flex m-auto w-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/logo-alpes-small.svg" alt="Logo Alpes">
      </div>
    </div>
  </section>
</section>
<?php get_footer(); ?>