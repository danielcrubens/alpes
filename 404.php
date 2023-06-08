<div class="d-none ">
    <?php
    get_header();
    ?>
</div>
<section class="page-404 view  d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-10">
                <div class="error  mx-auto" data-text="404">404</div>
                <h3 class="text-center h3-responsive mt-3">Parece que você está perdido</h3>
                <p class="text-center">Ooooops, essa página não existe mais.</p>
                <div class="d-flex justify-content-center ">
                    <a class="arrow-transition d-inline " href="<?php echo esc_url(home_url('/')); ?>">
                        <img loading="lazy" class="img-fluid d-inline " src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/imagens/arrow-404-left.png" alt="seta voltar para home">
                        <span>Voltar para Home</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="d-none ">

    <?php get_footer(); ?>
</div>