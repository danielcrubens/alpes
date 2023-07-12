<?php
get_header();

if (have_posts()) {
	while (have_posts()) {
		the_post();

		$post_type = get_post_type();

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
				break;
		}
	}
}

get_footer();
