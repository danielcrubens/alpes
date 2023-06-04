<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();

        // Verifique o tipo de post atual
        $post_type = get_post_type();

        // Carregue o template correspondente ao tipo de post
        switch ($post_type) {
            case 'empresas':
                get_template_part('single-empresas');
                break;
            case 'noticias':
                get_template_part('single-noticias');
                break;
            case 'cases':
                get_template_part('single-cases');
                break;
            default:
                // Restante do código para exibir o conteúdo do arquivo single.php
                break;
        }
    }
}

get_footer();
?>
