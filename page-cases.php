<?php
/*Template Name: Casos */
?>
<?php get_header(); ?>

<section class="companies-alpes">
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

  <section class="white-dark bg-sole ">
    <div class="bg-cloud "></div>
    <div class="col-xl-11 mt-10 py-5 m-auto">
      <div class="container-fluid">
        <div id="custom-filter" class="row pt-5 m-auto d-flex justify-content-center">
          <li>
            <a class="mx-md-4 mx-3 h4-responsive active-cases" data-filter="*">Todos</a>
          </li>
          <li>
            <a class="mx-md-4 mx-3 h4-responsive" data-filter=".videos">Vídeos</a>
          </li>
          <li>
            <a class="mx-md-4 mx-3 h4-responsive" data-filter=".fotos">Fotos</a>
          </li>
        </div>

        <div class="iso-container row mt-5 mt-md-0 d-flex justify-content-between">
          <?php
          $args = array(
            'post_type' => 'cases',
            'posts_per_page' => -1,
          );

          $my_query = new WP_Query($args);

          if ($my_query->have_posts()) :
            while ($my_query->have_posts()) :
              $my_query->the_post();
              $categories = get_the_category();
              $category_classes = '';
              foreach ($categories as $category) {
                $category_classes .= $category->slug . ' ';
              }
          ?>
              <div class="col-xl-6 col-md-6 mt-5 custom-post isotope-item <?php echo $category_classes; ?>">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')); ?>
                </a>
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

