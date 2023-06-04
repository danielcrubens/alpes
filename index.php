<?php
get_header();

// Verifique se estamos na página de livros
if (is_post_type_archive('empresas')) {
	get_template_part('page-empresas');
} elseif (is_post_type_archive('noticias')) {
	get_template_part('page-noticias');
} elseif (is_post_type_archive('cases')) {
	get_template_part('page-cases');
} else {
	// Restante do código para exibir o conteúdo do arquivo index.php
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			// Restante do código para exibir o conteúdo do post
			// por exemplo: the_title(), the_content(), etc.
		}
	} else {
		// Mensagem para quando não houver posts
		echo 'Nenhum post encontrado.';
	}
}

get_footer();
?>
