<?php get_header(); ?>

<section class="news-single-alpes">
  <section class="d-flex justify-content-center m-auto align-items-center mt-5">
  <?php get_template_part('template-parts/content', 'alpes-logo'); ?>
  </section>

  <section class=" bg-alpes d-flex justify-content-center m-auto align-items-center">
    <div class="col-xl-11">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <h1 id="scroll-heading" class="text-center h1-responsive scroll-down">CASES</h1>
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