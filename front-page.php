<?php
/*Template Name: Home */
?>
<?php get_header(); ?>
<main class="front-page">

  <section class="d-flex justify-content-center m-auto align-items-center mt-5">
  <?php get_template_part('template-parts/content', 'alpes-logo'); ?>
  </section>
  <section class=" bg-alpes d-flex justify-content-center m-auto align-items-center">
    <div class="col-xl-11">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <h1 id="scroll-heading" class="text-center h1-responsive scroll-top">Com a gente você já está no topo</h1>
        </div>
      </div>
    </div>
  </section>

  <!--  <section class="d-flex justify-content-center m-auto align-items-center mt-5">
    <div class=" position-scroll ">
      <span class="mouse">
        <span class="move"></span>
      </span>
      <p class="text-center white-text"><small>scroll</small></p>
    </div>
  </section> -->

  <section class="pt-5 come-alpes d-md-block d-none">
    <div class="col-12 py-md-5">
      <div class="container-fluid">
        <div class="timeline-scroll d-none d-md-block">
          <div class="items">
            <div class="red-dot">
              <div class="dot"></div>
            </div>
          </div>
        </div>

        <div class="col-xl-11 pt-md-5 col-md-11 h-100 m-auto">
          <div class="container-fluid pt-md-5 ">
            <div class="py-md-5 scroll-down">
              <h2 class="h2-responsive text-center ">VENHA CAMINHAR COM OS GIGANTES</h2>
              <img loading="lazy" class="img-fluid d-flex m-auto" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/logo-alpes-small.svg" alt="Logo Alpes">
            </div>
            <div class="row d-none d-lg-inline-flex my-5 scroll-down">
              <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-right b-bottom p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-1'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-right b-bottom p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-2'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-right b-bottom p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-3'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-bottom p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-4'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 col-md-3 d-none d-lg-flex b-right p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-5'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 d-none d-lg-flex b-right p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-6'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 d-none d-lg-flex b-right p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-7'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 d-none d-lg-flex p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-8'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
            </div>

            <div class="row d-block d-lg-none d-inline-flex mt-3 mt-md-0">
              <div class="col-xl-3 col-6 col-md-3 d-none  d-md-block d-lg-flex b-right b-bottom p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-1'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 d-none  d-md-block d-lg-flex b-right b-bottom p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-2'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-right b-bottom p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-3'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-bottom p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-4'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 col-md-3 d-flex b-right p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-5'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 d-flex b-right b-right-sm p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-6'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 d-none  d-md-block d-lg-flex b-right p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-7'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 d-none  d-md-block d-lg-flex p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-random">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-8'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
            </div>
            <div class="d-flex my-md-5 mt-5 scroll-down">
              <a href="<?php echo esc_url(home_url('/')); ?>empresas" class="btn-alpes m-auto"> CONHEÇA NOSSOS CLIENTES</a>
            </div>

            <div class="pt-5 mt-10 scroll-down">
              <h2 class="h2-responsive text-center">CASES</h2>
              <img loading="lazy" class="img-fluid d-flex m-auto scroll-down" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/logo-alpes-small.svg" alt="Logo Alpes">
            </div>

            <section class="content-masonry d-md-block d-none">
              <div class=" container-button scroll-down">
                <button id="toggleButton">
                  <i id="toggleIcon" class="fas fa-hand-point-up"></i>
                </button>
              </div>
              <div class="col-11 m-auto red">

                <div class="container-fluid h-100 d-flex justify-content-center align-items-center">
                  <div id="gridContainer">

                    <div id="masonry1" class="grid-masonry visible">
                      <div class="container-fluid">
                        <div class='front-container'>
                          <div class='small scroll-down-delay-1'>
                            <img src="<?php the_field('imagem-masonry-1.1'); ?>" alt="Masonry Grupo Alpes">
                          </div>
                          <div class='small scroll-down-delay-1'>
                            <img src="<?php the_field('imagem-masonry-1.2'); ?>" alt="Masonry Grupo Alpes">
                          </div>
                          <div class='small scroll-down-delay-1'>
                            <img src="<?php the_field('imagem-masonry-1.3'); ?>" alt="Masonry Grupo Alpes">
                          </div>
                          <div class='large scroll-down-delay-1'>
                            <img src="<?php the_field('imagem-masonry-1.4'); ?>" alt="Masonry Grupo Alpes">
                          </div>
                          <div class='medium scroll-down-delay-1'>
                            <img src="<?php the_field('imagem-masonry-1.5'); ?>" alt="Masonry Grupo Alpes">
                          </div>
                          <div class='large scroll-down-delay-1'>
                            <img src="<?php the_field('imagem-masonry-1.6'); ?>" alt="Masonry Grupo Alpes">
                          </div>
                          <div class='small scroll-down-delay-1'>
                            <img src="<?php the_field('imagem-masonry-1.7'); ?>" alt="Masonry Grupo Alpes">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="masonry2" class="grid-masonry hidden">
                      <div class="container-fluid">
                        <div class='front-container'>
                          <div class='small'>
                          <img src="<?php the_field('imagem-masonry-1.1'); ?>" alt="Masonry Grupo Alpes">
                          </div>
                          <div class='small'>
                          <img src="<?php the_field('imagem-masonry-1.2'); ?>" alt="Masonry Grupo Alpes">
                          </div>
                          <div class='small'>
                          <img src="<?php the_field('imagem-masonry-1.3'); ?>" alt="Masonry Grupo Alpes">
                          </div>
                          <div class='large'>
                          <img src="<?php the_field('imagem-masonry-1.4'); ?>" alt="Masonry Grupo Alpes">
                          </div>
                          <div class='medium'>
                          <img src="<?php the_field('imagem-masonry-1.5'); ?>" alt="Masonry Grupo Alpes">
                          </div>
                          <div class='large'>
                          <img src="<?php the_field('imagem-masonry-1.6'); ?>" alt="Masonry Grupo Alpes">
                          </div>
                          <div class='small'>
                          <img src="<?php the_field('imagem-masonry-1.7'); ?>" alt="Masonry Grupo Alpes">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

          </div>
          <div class="d-flex scroll-down">
            <a href="<?php echo esc_url(home_url('/')); ?>cases" class="btn-alpes m-auto">CASES DE SUCESSO</a>
          </div>
          <div class="py-5 mt-10">
            <div class="pt-5 scroll-down">
              <h2 class="h2-responsive text-center">ANTES DE ESCALAR, PEÇA AJUDA AOS GIGANTES</h2>
              <img loading="lazy" class="img-fluid d-flex m-auto" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/logo-alpes-small.svg" alt="Logo Alpes">
            </div>
          </div>
        </div>
        <div class="col-xl-11 red col-md-11 h-100 m-auto scroll-down">
          <div class="container-fluid">
            <div class="row d-none d-flex my-5">
              <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-right p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover img-dan">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-escalar-1'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-right p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover dan">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-escalar-2'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-right p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-escalar-3'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>
              <div class="col-xl-3 col-6 col-md-3 d-lg-flex p-1 py-1">
                <div class="d-flex w-100 h-100 card-hover">
                  <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-escalar-4'); ?>" alt="Logo Grupo Alpes">
                </div>
              </div>

              <div class="d-flex m-auto my-md-5 scroll-down">
                <div class="py-5">
                  <a href="<?php echo esc_url(home_url('/')); ?>sobre" class="btn-alpes m-auto">CONHEÇA O GRUPO ALPES</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="py-5">
          <div class="pt-5 scroll-down">
            <h2 class="h2-responsive text-center">ALPES NA MÍDIA</h2>
            <img loading="lazy" class="img-fluid d-flex m-auto" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/logo-alpes-small.svg" alt="Logo Alpes">
          </div>
        </div>
      </div>
      <div class="col-xl-11 col-md-11 h-100 m-auto scroll-down">
        <div class="container-fluid">
          <div class="row d-none d-flex my-5">
            <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-right p-1 py-1">
              <div class="d-flex w-100 h-100 card-hover">
                <img loading="lazy" class="img-fluid m-auto d-flex img-random" src="<?php the_field('imagem-midia-1'); ?>" alt="Grupo Alpes">
              </div>
            </div>
            <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-right p-1 py-1">
              <div class="d-flex w-100 h-100 card-hover">
                <img loading="lazy" class="img-fluid m-auto d-flex img-random" src="<?php the_field('imagem-midia-2'); ?>" alt="Grupo Alpes">
              </div>
            </div>
            <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-right p-1 py-1">
              <div class="d-flex w-100 h-100 card-hover">
                <img loading="lazy" class="img-fluid m-auto d-flex img-random" src="<?php the_field('imagem-midia-3'); ?>" alt="Grupo Alpes">
              </div>
            </div>
            <div class="col-xl-3 col-6 col-md-3 d-lg-flex p-1 py-1">
              <div class="d-flex w-100 h-100 card-hover">
                <img loading="lazy" class="img-fluid m-auto d-flex img-random" src="<?php the_field('imagem-midia-4'); ?>" alt="Grupo Alpes">
              </div>
            </div>

            <div class="d-flex m-auto my-md-5 scroll-down">
              <div class="py-5">
                <a href="<?php echo esc_url(home_url('/')); ?>noticias" class="btn-alpes m-auto px-md-5">VEJA MAIS</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="bg-mountain d-flex justify-content-center m-auto">
      <div class="col-10 mt-4">
        <div class="container-fluid">
          <h2 class="text-center h2-responsive scroll-down">DECIDIMOS COMBINAR NOSSAS EXPERTISES PARA JUNTOS MOSTRARMOS O HORIZONTE</h2>
          <img loading="lazy" class="img-fluid d-flex m-auto scroll-down" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/logo-alpes-small.svg" alt="Logo Alpes">
          <div class="position-text mb-4">
            <h2 class="text-center h2-responsive scroll-down">DEPENDE MUITO MAIS DE ESTRATÉGIA DO QUE DE BRAVURA</h2>
            <img loading="lazy" class="img-fluid d-flex m-auto scroll-down" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/logo-alpes-small.svg" alt="Logo Alpes">
          </div>

        </div>

      </div>

    </section>
  </section>

  <section class=" come-alpes d-md-none d-block">
    <div class="col-11 py-md-5 m-auto">
      <div class="container-fluid pt-md-5">
        <div class="py-md-5 pt-5">
          <h2 class="h2-responsive text-center">VENHA CAMINHAR COM OS GIGANTES</h2>
          <img loading="lazy" class="img-fluid d-flex m-auto" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/logo-alpes-small.svg" alt="Logo Alpes">
        </div>
        <div class="row d-block d-lg-none d-inline-flex mt-3 mt-md-0">
          <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-right b-bottom p-1 py-1">
            <div class="d-flex w-100 h-100 card-hover">
              <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-1'); ?>" alt="Logo Grupo Alpes">
            </div>
          </div>
          <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-bottom p-1 py-1">
            <div class="d-flex w-100 h-100 card-hover">
              <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-2'); ?>" alt="Logo Grupo Alpes">
            </div>
          </div>
          <div class="col-xl-3 col-6 col-md-3 col-md-3 d-flex b-right p-1 py-1">
            <div class="d-flex w-100 h-100 card-hover">
              <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-3'); ?>" alt="Logo Grupo Alpes">
            </div>
          </div>
          <div class="col-xl-3 col-6 col-md-3 d-flex b-right b-right-sm p-1 py-1">
            <div class="d-flex w-100 h-100 card-hover">
              <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-random-4'); ?>" alt="Logo Grupo Alpes">
            </div>
          </div>
        </div>
        <div class="d-flex mt-5">
          <a href="<?php echo esc_url(home_url('/')); ?>empresas" class="btn-alpes m-auto"> CONHEÇA NOSSOS CLIENTES</a>
        </div>
      </div>
    </div>

    <section class="mt-5">
      <div class="pt-5">
        <h2 class="h2-responsive text-center">CASES</h2>
        <img loading="lazy" class="img-fluid d-flex m-auto" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/logo-alpes-small.svg" alt="Logo Alpes">
      </div>
      <div class="col-12 mt-4 m-0 p-0">
        <div class="container-fluid p-0">
          <img loading="lazy" class="img-fluid d-flex m-auto d-block d-md-none" src="<?php the_field('imagem-grid-cases-mobile'); ?>" alt="Grid Cases">
          <div class="d-flex my-5">
            <a href="<?php echo esc_url(home_url('/')); ?>cases" class="btn-alpes m-auto">CASES DE SUCESSO</a>
          </div>
        </div>
      </div>
    </section>

    <section class="">
      <div class="pt-5">
        <h2 class="h2-responsive text-center">ANTES DE ESCALAR, PEÇA AJUDA AOS GIGANTES</h2>
        <img loading="lazy" class="img-fluid d-flex m-auto" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/logo-alpes-small.svg" alt="Logo Alpes">
      </div>
      <div class="col-11 col-md-11 h-100 m-auto">
        <div class="container-fluid">
          <div class="row d-none d-flex my-5">
            <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-right b-bottom p-3 py-1">
              <div class="d-flex w-100 h-100 card-hover">
                <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-escalar-1'); ?>" alt="Logo Grupo Alpes">
              </div>
            </div>
            <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-bottom p-3 py-3">
              <div class="d-flex w-100 h-100 card-hover">
                <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-escalar-2'); ?>" alt="Logo Grupo Alpes">
              </div>
            </div>
            <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-right p-3 py-1">
              <div class="d-flex w-100 h-100 card-hover">
                <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-escalar-3'); ?>" alt="Logo Grupo Alpes">
              </div>
            </div>
            <div class="col-xl-3 col-6 col-md-3 d-lg-flex p-3 py-1">
              <div class="d-flex w-100 h-100 card-hover">
                <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-escalar-4'); ?>" alt="Logo Grupo Alpes">
              </div>
            </div>

            <div class="d-flex m-auto my-5">
              <div class="py-5">
                <a href="<?php echo esc_url(home_url('/')); ?>sobre" class="btn-alpes m-auto">CONHEÇA O GRUPO ALPES</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="">
        <div class="pt-5">
          <h2 class="h2-responsive text-center">ALPES NA MÍDIA</h2>
          <img loading="lazy" class="img-fluid d-flex m-auto" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/logo-alpes-small.svg" alt="Logo Alpes">
        </div>
      </div>
      </div>
      <div class="col-11 col-md-11 h-100 m-auto">
        <div class="container-fluid">
          <div class="row d-none d-flex my-5">
            <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-right b-bottom p-3 py-1">
              <div class="d-flex w-100 h-100 card-hover">
                <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-escalar-1'); ?>" alt="Logo Grupo Alpes">
              </div>
            </div>
            <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-bottom p-3 py-1">
              <div class="d-flex w-100 h-100 card-hover">
                <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-escalar-2'); ?>" alt="Logo Grupo Alpes">
              </div>
            </div>
            <div class="col-xl-3 col-6 col-md-3 d-lg-flex b-right p-3 py-1">
              <div class="d-flex w-100 h-100 card-hover">
                <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-escalar-3'); ?>" alt="Logo Grupo Alpes">
              </div>
            </div>
            <div class="col-xl-3 col-6 col-md-3 d-lg-flex p-3 py-1">
              <div class="d-flex w-100 h-100 card-hover">
                <img loading="lazy" class="img-fluid m-auto d-flex" src="<?php the_field('imagem-escalar-4'); ?>" alt="Logo Grupo Alpes">
              </div>
            </div>

            <div class="d-flex m-auto my-md-5">
              <div class="py-5">
                <a href="<?php echo esc_url(home_url('/')); ?>sobre" class="btn-alpes m-auto">CONHEÇA O GRUPO ALPES</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </section>

  <section class="bravery-alpes d-flex justify-content-center py-5">
    <div class="col-xl-11">
      <div class="container-fluid">
       
        <div class="row">
          <div class="col col m-auto d-none d-md-block scroll-down">
            <div class="d-flex  py-3 flex-column justify-content-center align-items-center">
              <div class="circle-hover rounded-circle overlay zoom">
                <img loading="lazy" class="img-fluid overlay zoom" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/casa.svg" alt="Casa">
              </div>
              <div class="card-body text-center">
                <p><?php the_field('texto-servicos-1'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-6 m-auto d-md-none d-block">
            <div class="d-flex  py-3 flex-column justify-content-center align-items-center">
              <div class="circle-hover rounded-circle overlay zoom">
                <img loading="lazy" class="img-fluid overlay zoom" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/casa.svg" alt="Casa">
              </div>
              <div class="card-body text-center">
                <p><?php the_field('texto-servicos-1'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-6 m-auto d-md-none d-block">
            <div class="d-flex  py-3 flex-column justify-content-center align-items-center">
              <div class="circle-hover rounded-circle overlay zoom">
                <img loading="lazy" class="img-fluid overlay zoom" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/mosquetao.svg" alt="Mosquetão">
              </div>
              <div class="card-body text-center">
                <p><?php the_field('texto-servicos-2'); ?></p>
              </div>
            </div>
          </div>
          <div class="col col m-auto d-none d-md-block scroll-down-delay-1">
            <div class="d-flex  py-3 flex-column justify-content-center align-items-center">
              <div class="circle-hover rounded-circle overlay zoom">
                <img loading="lazy" class="img-fluid overlay zoom" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/mosquetao.svg" alt="Casa">
              </div>
              <div class="card-body text-center">
                <p><?php the_field('texto-servicos-2'); ?></p>
              </div>
            </div>
          </div>
          <div class="col m-auto scroll-down-delay-2">
            <div class="d-flex  py-3 flex-column justify-content-center align-items-center">
              <div class="circle-hover rounded-circle overlay zoom">
                <img loading="lazy" class="img-fluid overlay zoom" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/casa.svg" alt="Casa">
              </div>
              <div class="card-body text-center">
                <p><?php the_field('texto-servicos-3'); ?></p>
              </div>
            </div>
          </div>
          <div class="col m-auto scroll-down-delay-3">
            <div class="d-flex  py-3 flex-column justify-content-center align-items-center">
              <div class="circle-hover rounded-circle overlay zoom">
                <img loading="lazy" class="img-fluid overlay zoom" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/casa.svg" alt="Casa">
              </div>
              <div class="card-body text-center">
                <p><?php the_field('texto-servicos-4'); ?></p>
              </div>
            </div>
          </div>
          <div class="col m-auto scroll-down-delay-4">
            <div class="d-flex  py-3 flex-column justify-content-center align-items-center">
              <div class="circle-hover rounded-circle overlay zoom">
                <img loading="lazy" class="img-fluid overlay zoom" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/casa.svg" alt="Casa">
              </div>
              <div class="card-body text-center">
                <p><?php the_field('texto-servicos-5'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex my-md-5 scroll-down">
          <a href="<?php echo esc_url(home_url('/')); ?>sobre" class="btn-alpes m-auto">CONHEÇA NOSSOS SERVIÇOS</a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-adventure d-flex justify-content-center m-auto">
    <div class="col-xl-10 col-12 mt-4">
      <div class="container-md-fluid mt-5">
        <h2 class="text-center h2-responsive scroll-down">E ESSE É O PRIMEIRO PASSO DA AVENTURA</h2>
        <img loading="lazy" class="img-fluid d-flex m-auto scroll-down" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/logo-alpes-small.svg" alt="Logo Alpes">
        <div class="d-flex mt-5">
          <a href="<?php echo esc_url(home_url('/')); ?>contatos" class="btn-alpes m-auto scroll-down">DÊ O SEU PRIMEIRO PASSO</a>
        </div>
        <div class="position-text mb-4">
          <img loading="lazy" class="img-fluid d-flex m-auto scroll-down" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/svg/logo-alpes-small.svg" alt="Logo Alpes">
        </div>
      </div>
    </div>
    </div>
  </section>

</main>

<?php
get_footer();
