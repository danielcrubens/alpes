<?php
/*Template Name: Serviços */
?>
<?php get_header(); ?>
<section class="companies-alpes">
  <section class="d-flex justify-content-center m-auto align-items-center mt-5">
  <?php get_template_part('template-parts/content', 'alpes-logo'); ?>
  </section>

  <section class=" bg-alpes d-flex justify-content-center m-auto align-items-center">
    <div class="col-xl-11">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <h1 id="scroll-heading" class="text-center h1-responsive scroll-top">SERVIÇOS</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="white-dark bg-cloud-overlay custom-post-companies">
    <div class="bg-cloud "></div>
    <div class="col-xl-12 py-5">
      <div class="container-fluid p-md-0 my-md-5 scroll-down">
        <div class="py-md-5">
          <h2 class="text-center h2-responsive">ANTES DE ESCALAR PEÇA AJUDA AOS GIGANTES</h2>
        </div>

        <div class="row mt-5 scroll-down">
          <?php
          $args = array(
            'post_type' => 'empresas',
            'posts_per_page' => -1,
          );

          $empresas_query = new WP_Query($args);

          if ($empresas_query->have_posts()) :
            $iteration = 0;
            while ($empresas_query->have_posts()) :
              $empresas_query->the_post();
          ?>
              <div class="row mt-5 scroll-down">
                <?php
                if ($iteration % 2 == 0) {
                ?>
                  <div class="col-md-6 d-inline-flex align-items-stretch">
                    <?php the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid')); ?>
                  </div>
                  <div class="col-md-6 d-inline-block align-items-stretch">
                    <img loading="lazy" class="img-fluid mx-md-5 mb-3 d-none d-md-block"src="<?php the_field('imagem-empresas'); ?>" alt="Logo Alpes">
                    <div class="mx-md-5">
                      <h5 class="h5-responsive"><?php the_title(); ?></h5>
                      <p class="last mb-md-3 "><?php the_content(); ?></p>
                      <a class="btn-alpes m-auto m-0   d-md-inline-block" href="<?php the_field('link-empresas'); ?>">
                        VER MAIS
                      </a>
                    </div>
                  </div>
                <?php
                } else {
                ?>
                  <div class="col-md-6 order-md-2">
                    <?php the_post_thumbnail('meu-thumb', array('class' => 'img-fluid')); ?>
                  </div>
                  <div class="col-md-6 order-md-1">
                    <img loading="lazy" class="img-fluid mx-md-5 d-none d-md-block" src="<?php the_field('imagem-empresas'); ?>" alt="Logo Alpes">
                    <div class="mx-md-5">
                      <h5 class="h5-responsive"><?php the_title(); ?></h5>
                      <p class="last mb-md-3 "><?php the_excerpt(); ?></p>
                      <a class="btn-alpes m-auto m-0 d-none  d-md-inline-block" href="<?php the_field('link-empresas'); ?>">
                        VER MAIS
                      </a>
                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
          <?php
              $iteration++;
            endwhile;
          endif;
          ?>
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