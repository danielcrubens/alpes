<?php

// Chamar a tag Title
function alpes_theme_support()
{
  // Chamar a tag Title
  add_theme_support('title-tag');


  // Adicionar os formatos de posts
  add_theme_support('post-formats', array('aside', 'chat', 'status', 'video', 'audio', 'gallery', 'image'));

  // Adicionar o logotipo
  add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'alpes_theme_support');

// Previnir o erro na tag title em versões antigas
if (!function_exists('_wp_render_title_tag')) {
  function alpes_render_title()
  {
?>
    <title><?php wp_title('|', true, 'right'); ?></title>
<?php
  }
  add_action('wp_head', 'alpes_render_title');
}

// Definir as miniaturas dos posts
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1024, 460, true);
add_image_size('mini-thumb', 190, 90, true);


// Definir o tamanho o resumo
add_filter('excerpt_length', function ($length) {
  return 15;
});


register_sidebar(
  array(
    'name' => 'Barra lateral Alpes',
    'id' => 'sidebar',
    'before_widget' => '<aside>',
    'after_widget' => '</aside>',

  )
);

//Limita os caracteres do titulo no post inicial
function title_limite($len = 55, $post_id = null)
{
  $title = get_the_title($post_id);
  if (strlen($title) > $len) {
    $title = substr($title, 0, $len) . '...';
  }
  echo $title;
}
//Estilo de paginação numerado com Bootstrap
function bootstrap_pagination($echo = true)
{
  global $wp_query;

  $big = 999999999; // need an unlikely integer

  $pages = paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'total' => $wp_query->max_num_pages,
    'type'  => 'array',
    'prev_next'   => true,
    'prev_text'    => __('« Anterior '),
    'next_text'    => __(' Próximo »'),
  ));

  if (is_array($pages)) {

    $pagination = '<div class="pagination text-center font-weight-normal"><ul class="pagination text-center">';
    foreach ($pages as $page) {
      $pagination .= '<li class="page-item ' . (strpos($page, 'current') !== false ? 'active' : '') . '"> ' . str_replace('page-numbers', 'page-link', $page) . '</li>';
    }
    $pagination .= '</ul></div>';
    if ($echo) {
      echo $pagination;
    } else {
      return $pagination;
    }
  }
}

//Suporte para trocar foto de administrador wordpress
function wpb_new_gravatar($avatar_defaults)
{
  $myavatar = 'http://example.com/wp-content/uploads/2017/01/wpb-default-gravatar.png';
  $avatar_defaults[$myavatar] = "Default Gravatar";
  return $avatar_defaults;
}

add_filter('avatar_defaults', 'wpb_new_gravatar');

//remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
remove_action('shutdown', 'wp_ob_end_flush_all', 1);
add_action('shutdown', function () {
  while (@ob_end_flush());
});
function custom_login_css()
{
  echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri() . '/css/main.css"/>';
}
add_action('login_head', 'custom_login_css');

/*Função que altera a URL, trocando pelo endereço do seu site*/
function my_login_logo_url()
{
  return get_bloginfo('url');
}
add_filter('login_headerurl', 'my_login_logo_url');

/*Função que adiciona o nome do seu site, no momento que o mouse passa por cima da logo*/
function my_login_logo_url_title()
{
  return 'Nome do seu site - Voltar para Home';
}
add_filter('login_headertitle', 'my_login_logo_url_title');


add_filter('wpcf7_form_action_url', 'remove_form_fragment');

function remove_form_fragment($url)
{
  return remove_query_arg('wpcf7', $url);
}


function create_post_types()
{
  // Registrar o tipo de post "serviços"
  register_post_type(
    'serviços',
    array(
      'labels' => array(
        'name' => __('Serviços'),
        'singular_name' => __('Serviços')
      ),
      'supports' => array(
        'title', 'editor', 'thumbnail', 'excerpt'
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 3,
      'menu_icon' => 'dashicons-groups',
      'rewrite' => array('slug' => 'servicos'),
    )
  );

  // Registrar o tipo de post "cases"
  register_post_type(
    'cases',
    array(
      'labels' => array(
        'name' => __('Cases'),
        'singular_name' => __('Cases')
      ),
      'supports' => array(
        'title', 'editor', 'thumbnail', 'excerpt'
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 4,
      'menu_icon' => 'dashicons-images-alt2',
      'rewrite' => array('slug' => 'cases'),
      'taxonomies' => array('category'),
      'post-formats' => array('aside', 'gallery', 'video')

    )
  );
  // Registrar o tipo de post "noticias"
  register_post_type(
    'noticias',
    array(
      'labels' => array(
        'name' => __('Noticias'),
        'singular_name' => __('Noticias')
      ),
      'supports' => array(
        'title', 'editor', 'thumbnail', 'excerpt'
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-book',
      'rewrite' => array('slug' => 'noticias'),
    )
  );
}
add_action('init', 'create_post_types');

?>