<?php wp_footer(); ?>

<footer class="py-5">
  <a id="scrollTop" class="text-center">
    <i class="fas fa-caret-up fa-2x"></i>
  </a>
  <section class=" d-flex justify-content-center m-auto align-items-center pt-5">
    <div class="col-xl-11 m-auto">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <h2 class="h2-responsive text-center text-md-left py-4 py-md-0">DÊ O SEU PRIMEIRO <span class="px-2 bg-blue">PASSO</span></h2>
        </div>
        <div class="d-flex">
          <a href="<?php echo esc_url(home_url('/')); ?>contato" class=" m-auto d-flex white-text"><span class="px-5 bg-blue">VER MAIS</span></a>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center m-auto pt-5 pb-5">
          <p class="white-text m-0 d-none d-md-block"><a class="text-white" href="http://"> <span class="mx-2">FACEBOOK </span> </a>| <a class="text-white"href="http://"> <span class="mx-2">INSTAGRAM </span></a> |  <a class="text-white" href="http://"><span class="mx-2">LINKEDIN</span></a></p>
          <div class=" d-block d-md-none">
          <a class="mr-3" href="http://" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-facebook-square fa-2x white-text"></i>
              </a>
              <a class="mr-3" href="http://" target="_blank" rel="noopener noreferrer">
              <i class="fab fa-instagram fa-2x white-text"></i>
              </a>
              <a class="mr-3" href="http://" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-linkedin fa-2x white-text"></i>
              </a>
          </div>
          <p class="white-text m-0 text-center mt-4 text-lg-left">TODOS DIREITOS RESERVADOS © 2022 | CNPJ: 38.488.871/0001.79</p>
        </div>
      </div>
    </div>
  </section>
</footer>

<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/popper.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/mdb.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/main.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/isotope.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/scrollreveal.js"></script>
</html>