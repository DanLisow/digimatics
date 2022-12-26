<?php 

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action( 'init', 'register_post_types' );
add_action('acf/input/admin_head', 'my_acf_admin_head');



function register_post_types(){
	register_post_type( 'vacancy', [
		'label'  => null,
		'labels' => [
			'name'               => 'Вакансии', // основное название для типа записи
			'singular_name'      => 'Вакансия', // название для одной записи этого типа
			'add_new'            => 'Добавить вакансию', // для добавления новой записи
			'add_new_item'       => 'Добавление вакансии', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование вакансии', // для редактирования типа записи
			'new_item'           => 'Новая вакансия', // текст новой записи
			'view_item'          => 'Смотреть вакансию', // для просмотра записи этого типа.
			'search_items'       => 'Искать вакансию', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Вакансии', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 9,
		'menu_icon'           => 'dashicons-text-page',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'custom-fields', 'page-attributes' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

	register_post_type( 'service', [
		'label'  => null,
		'labels' => [
			'name'               => 'Услуги', // основное название для типа записи
			'singular_name'      => 'Услуга', // название для одной записи этого типа
			'add_new'            => 'Добавить услугу', // для добавления новой записи
			'add_new_item'       => 'Добавление услуги', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование услуги', // для редактирования типа записи
			'new_item'           => 'Новая услуга', // текст новой записи
			'view_item'          => 'Смотреть услугу', // для просмотра записи этого типа.
			'search_items'       => 'Искать услугу', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Услуги', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 9,
		'menu_icon'           => 'dashicons-money-alt',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'custom-fields', 'page-attributes' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

    register_taxonomy( 'category-vacancy', [ 'vacancy' ], [
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Категории',
			'singular_name'     => 'Категория',
			'search_items'      => 'Искать категории',
			'all_items'         => 'Все категории',
			'view_item '        => 'Смотреть категорию',
			'parent_item'       => 'Parent Genre',
			'parent_item_colon' => 'Parent Genre:',
			'edit_item'         => 'Редактировать категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить новую категорию',
			'new_item_name'     => 'Новое название категории',
			'menu_name'         => 'Категории',
			'back_to_items'     => '← Назад к категориям',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		'hierarchical'          => false,
		'rewrite'               => true,
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
	] );


	register_post_type( 'product', [
		'label'  => null,
		'labels' => [
			'name'               => 'Продукты', // основное название для типа записи
			'singular_name'      => 'Продукт', // название для одной записи этого типа
			'add_new'            => 'Добавить продукт', // для добавления новой записи
			'add_new_item'       => 'Добавление продукта', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование продукта', // для редактирования типа записи
			'new_item'           => 'Новый продукт', // текст новой записи
			'view_item'          => 'Смотреть продукт', // для просмотра записи этого типа.
			'search_items'       => 'Искать продукт', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Продукты', // название меню
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 10,
		'menu_icon'           => 'dashicons-cart',
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'custom-fields', 'page-attributes' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}


function style_theme()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.min.css');
}

function scripts_theme()
{
    wp_enqueue_script('libs', get_template_directory_uri() . '/assets/js/library.min.js');
    wp_enqueue_script('map', "https://api-maps.yandex.ru/2.1/?apikey=2e09b177-c3bf-48d0-97b1-2ab4e3ac7e35&lang=ru_RU");
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu.js');
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/parallax.js');
	wp_enqueue_script('tabs', get_template_directory_uri() . '/assets/js/tabs.js');
    wp_enqueue_script('mask', "https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js");
    wp_register_script( 'trueajax', get_stylesheet_directory_uri() . '/assets/js/ajax.js', array(), time(), true );
	wp_localize_script(
		'trueajax',
		'ajax',
		array(
			'ajax_url' => admin_url( 'admin-ajax.php' )
		)
	);
	wp_enqueue_script( 'trueajax' );
}

function theme_register_nav_menu(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('page', 'post'));
}



add_action('admin_menu', 'add_option_field_to_general_admin_page');
function add_option_field_to_general_admin_page(){
	
	register_setting( 'general', 'ex_mail');
	register_setting( 'general', 'service_option');

	add_settings_field( 
		'setting-id-email', 
		'Почта для отправки заявок', 
		'setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'setting-id-email', 
			'option_name' => 'ex_mail' 
		)
	);
	add_settings_field( 
		'setting-id-service', 
		'Номер варианта блока услуг (от 1 до 4)', 
		'setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'setting-id-service', 
			'option_name' => 'service_option' 
		)
	);
}

function setting_callback_function( $val ){
	$id = $val['id'];
	$option_name = $val['option_name']; ?>

<input type="text" name="<? echo $option_name ?>" id="<? echo $id ?>"
    value="<? echo esc_attr( get_option($option_name) ) ?>" style="width: 300px;" />

<?php
}


// ==================


add_action( 'wp_ajax_send', 'sendMail' );
add_action( 'wp_ajax_nopriv_send', 'sendMail' );

function sendMail() {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
    $text = isset($_POST['text']) ? $_POST['text'] : '';
	$attachment;

    $admin_email = isset($_POST['hr']) ? 'hr@digimatics.ru' : get_option('ex_mail');

    $message = '
            <p style="font-size:18px; border-bottom:1px solid #ccc; padding-bottom:15px; display:inline-block;">Заявка с сайта <a href="https://digimatics.ru">digimatics.ru</a></p>
            <p><b>Имя: </b>' . $name . '</p>
            <p><b>Телефон: </b>' . $phone . '</p>
			<p><b>Email: </b>' . $email . '</p>
            <p><b>Текст: </b>' . $text . '</p>';

	if(!empty($_FILES['file']) && !is_null($_FILES['file'])){
		if ( ! function_exists( 'wp_handle_upload' ) ) 
			require_once( ABSPATH . 'wp-admin/includes/file.php' );
				
		$file = & $_FILES['file'];
		$overrides = [ 'test_form' => false ];

		$movefile = wp_handle_upload( $file, $overrides );

		if ( $movefile && empty($movefile['error']) ) {
			$attachment = $movefile;
		} else {
			$attachment = '';
		}
	}
		

    wp_mail( 
        [$admin_email, 'black-studio.digital@yandex.ru'],
        'Заявка с сайта Цифроматика',
        $message,
        array(
            'From: info@digimatics.ru',
            'Content-type: text/html; charset=utf-8'
		),
		$attachment 
    );

	echo '<pre>';
	print_r($file);

    die;
}

// ==================

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Галерея иконок',
		'menu_title'	=> 'Галерея иконок',
		'menu_slug' 	=> 'gallery-icon',
		'position' 		=> 10,
		'icon_url' 		=> 'dashicons-format-gallery',
		'redirect'		=> false
	));
}

// ==================

function my_acf_admin_head() { ?>
<style type="text/css">
.acf-table>tbody>tr:nth-child(odd)>.acf-row-handle.order {
    background: #e5e5e5;
}

.acf-repeater .acf-row-handle span {
    font-size: 16px;
    font-weight: bold;
}

.acf-image-uploader .image-wrap img {
    height: 180px;
    width: 180px;
    object-fit: contain;
}
</style>
<?php }


add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>
	';
}