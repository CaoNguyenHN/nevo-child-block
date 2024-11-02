<?php
/**
 * Nevo child theme functions and definitions.
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

add_action( 'wp_head', 'nevo_load_favicon' );
/**
 * Echo favicon link.
 *
 * @since 1.0.0
 *
 * @return void Return early if WP Site Icon is used.
 */
function nevo_load_favicon() {

	// Defer to the WP site icon functionality if in use.
	if ( function_exists( 'has_site_icon' ) && has_site_icon() )
		return;
	
	// Get the appropriate favicon URL.
	$favicon_url = nevo_get_favicon_url();

	// If a favicon URL is present then use it to echo the full favicon <link> code.
	if ( $favicon_url )
		echo '<link rel="icon" href="' . esc_url( $favicon_url ) . '" />' . "\n";

}

/**
 * Return the appropriate favicon URL.
 *
 * The 'nevo_pre_load_favicon' filter is made available
 * so that the child theme can define its own custom favicon URL.
 * 
 * The value of the final $favicon_url variable uses the
 * 'nevo_favicon_url' filter.
 *
 * @since 1.0.0
 *
 * @return string Path to favicon.
 */
function nevo_get_favicon_url() {
	
	$dir_uri = get_template_directory_uri();
	
	/**
	 * Filter to allow child theme to assign its own custom favicon URL.
	 *
	 * @since 1.0.0
	 *
	 * @param bool $favicon_url 'false'.
	 */
	$pre = apply_filters( 'nevo_pre_load_favicon', false );

	if ( $pre !== false ){
		$favicon_url = $pre;
	}elseif ( file_exists( $dir_uri . '/assets/images/favicon.png' ) ){
		$favicon_url = $dir_uri . '/assets/images/favicon.png';
	}else{
		$favicon_url = $dir_uri . '/assets/images/favicon.png';
	}
	/**
	 * Filter the favicon URL.
	 *
	 * @since 1.0.0
	 *
	 * @param string $favicon_url Favicon URL.
	 */
	$favicon_url = apply_filters( 'nevo_favicon_url', $favicon_url );

	return trim( $favicon_url );
	
}

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_scripts' );
function child_theme_enqueue_scripts() {
	if ( is_page_template('template-parts/frontpage.php') ) {
		// enqueue SwiperJS CSS
		//wp_enqueue_style('swiper-bundle-css', get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css', null, '9.1.1');
		// enqueue Glightbox CSS
		//wp_enqueue_style('glightbox-css', get_stylesheet_directory_uri() . '/assets/css/glightbox.min.css', null, '3.2.0');
		// enqueue Aos CSS
		wp_register_style('aos-style', get_stylesheet_directory_uri() . '/assets/css/aos.css', [], '3.0');
		
		// enqueue SwiperJS JavaScript
		//wp_enqueue_script('swiper-bundle-js', get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js', null, '9.1.1');
		
		// enqueue Glightbox JavaScript
		//wp_enqueue_script('glightbox-js', get_stylesheet_directory_uri() . '/assets/js/glightbox.min.js', null, '3.2.0');
		
		// enqueue Aos JavaScript
		wp_register_script('aos-script', get_stylesheet_directory_uri() . '/assets/js/aos.js', [], '3.0', true);
		
		wp_enqueue_style( 'aos-style' );
		wp_enqueue_script( 'aos-script' );
		
		// default aos init
		/* 	bù đắp: -100
			thời lượng: 1100
			nới lỏng: giảm bớt
			chậm trễ: 0
			một lần: đúng
		*/
		$aos_init = apply_filters( 'nevo_child_aos_init',
		'var aoswp_params = {
		"offset":"-100",
		"duration":"1100",
		"easing":"ease",
		"delay":"0",
		"once":true};'
		);
		
		// minify the aos init inline script before inject
		$aos_init = preg_replace(['/(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:(?<!\:|\\\|\'|\")\/\/.*))/','/\>[^\S ]+/s','/[^\S ]+\</s','#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\'|\/\*(?>.*?\*\/))|\s*+;\s*+(})\s*+|\s*+([*$~^|]?+=|[{};,>~]|\s(?![0-9\.])|!important\b)\s*+|([[(:])\s++|\s++([])])|\s++(:)\s*+(?!(?>[^{}"\']++|"(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')*+{)|^\s++|\s++\z|(\s)\s+#si'],['','>','<','$1$2$3$4$5$6$7'], $aos_init);
		
		// inject aos init inline script
		wp_add_inline_script( 'aos-script', wp_kses_data($aos_init), 'before' );
	}
	// Remove woo blocks-style
	wp_dequeue_style( 'wc-blocks-style' );
	// enqueue Main JavaScript
	//wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), '0.1', true);
	
	//wp_enqueue_script('lazyload-js', get_stylesheet_directory_uri() . '/assets/js/lazyload.min.js', array(), '17.5.0', true);
	//wp_enqueue_script('lazyload-init', get_stylesheet_directory_uri() . '/assets/js/lazyload-init.js', array('lazyload-js'), '1.0', true);
	
}

require get_stylesheet_directory() . '/inc/languages/nevo-languages.php';

require get_stylesheet_directory() . '/inc/wp-optimize/optimize.php';

$optimisations = [
    'block_external_HTTP'       => false, // Chặn các yêu cầu đến địa chỉ http bên ngoài. Do đó, chặn tất cả các yêu cầu được thực hiện bởi các plugin đến các địa chỉ bên ngoài.
	'defer_CSS'                 => false, // Trì hoãn việc tải tất cả các kịch bản đã đăng ký bằng cách sử dụng hàm loadCSS từ Filament Group.
	'defer_JS'                  => true,  // Thêm defer="defer" cho tất cả các tệp JavaScript đã được đăng ký. (trì hoãn quá trình sử lý js)
	'classic_widget'      		=> true, // Bật màn hình cài đặt widget cổ điển trong Giao diện - Widget và Tùy biến. Vô hiệu hóa trình chỉnh sửa khối khỏi việc quản lý tiện ích con.
	'disable_comments'          => false, // Tắt chức năng bình luận và loại bỏ nó khỏi menu quản trị.
	'disable_classic_styles'    => true, // loại bỏ kiểu dáng classic theme.
	'disable_block_styling'     => false, // Loại bỏ kiểu dáng khối Gutenberg mặc định.
	'disable_global_styles'     => false, // Xóa Các Biến CSS WordPress/Gutenberg Mặc Định Và Định Nghĩa SVG Khỏi Giao Diện Người Dùng
	'disable_embed'             => true, // Loại bỏ các tệp script được đăng ký bởi hệ thống nhúng phương tiện của WordPress.
	'disable_emoji'             => true,  // Loại bỏ các tệp script được đăng ký để hiển thị biểu tượng cảm xúc.
	'disable_feeds'             => true, // Loại bỏ các nguồn cấp dữ liệu bài viết.
	'disable_heartbeat'         => true, // Hủy đăng ký các tệp script heartbeat, thường làm nhiệm vụ tự động lưu.
	'disable_jquery'            => true, // Loại bỏ tệp script jQuery mặc định. NẾU trang web hoặc plugin phụ thuộc jQuery thì không nên loại bỏ-------------.
	'disable_jquery_migrate'    => true,  // Loại bỏ tệp script jQuery Migrate. NẾU trang web hoặc plugin phụ thuộc jQuery thì không nên loại bỏ-------------.
	'disable_rest_api'          => true, // Vô hiệu hóa rest api.
	'disable_RSD'               => true,  // Loại bỏ liên kết RDS trong phần head của trang web.
	'disable_shortlinks'        => true,  // Loại bỏ các liên kết ngắn trong phần head của trang web.
	'disable_theme_editor'      => false, // Vô hiệu hóa trình chỉnh sửa tệp cho chủ đề và plugin.
	'disable_version_numbers'   => true,  // Loại bỏ phiên bản được liên kết trong các tệp script và kiểu đã được đăng ký.
	'disable_WLW_manifest'      => true,  // Loại bỏ các liên kết WLW Manifest trong phần head của trang web.
	'disable_WP_version'        => true,  // Loại bỏ phiên bản WP trong phần head của trang web.
	'disable_XMLRPC'            => true,  // Vô hiệu hóa chức năng xmlrpc.
	'jquery_to_footer'          => true,  // Di chuyển tệp script jQuery mặc định xuống cuối trang.
	'limit_comments_JS'         => true,  // Giới hạn việc sử dụng JS cho bình luận chỉ đối với các thực thể đơn lẻ
	'limit_revisions'           => true,  // Giới hạn số lần sửa đổi thành 5
	'remove_comments_style'     => true,  // Loại bỏ kiểu dáng .recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
	'slow_heartbeat'            => true,  // Chậm lại nhịp tim thành một lần mỗi phút
	'instant_page'           	=> true,  // Tải trước khi người dùng click vào liên kết
	'smooth_scroll'         	=> true
];
$optimize = new Optimize( $optimisations );

// Add more editor assets.
add_action( 'enqueue_block_editor_assets', 'nevo_assets' );
/**
 * Add more editor styles and scripts
 */
function nevo_assets() {
	wp_enqueue_style('nevo-editor-css', get_stylesheet_directory_uri() . '/assets/css/editor-style.css', null, '1.0');
}

add_action( 'init', 'nevo_register_block' );
/**
 * Register block.
 *
 * @since 1.0.0
 */
function nevo_register_block() {
	$block_styles = array(
		'core/list'      => array(
			'checklist'        => esc_html__( 'Checklist', 'nevo' ),
			'checklist-circle' => esc_html__( 'Checklist Circle', 'nevo' ),
			'square'           => esc_html__( 'Square', 'nevo' ),
			'none'             => esc_html__( 'None', 'nevo' ),
		),
		'core/separator' => array(
			'dotted'         => esc_html__( 'Dotted', 'nevo' ),
			'wide-thin-line' => esc_html__( 'Wide Thin Line', 'nevo' ),
			'left-aligned'   => esc_html__( 'Left Aligned', 'nevo' ),
			'right-aligned'  => esc_html__( 'Right Aligned', 'nevo' ),
		),
		'core/image' => array(
			'boxshadow'      	=> esc_html__( 'Box Shadow', 'nevo' ),
			'boxshadow-medium' 	=> esc_html__( 'Box Shadow Medium', 'nevo' ),
			'boxshadow-large'   => esc_html__( 'Box Shadow Large', 'nevo' ),
		),
		'core/column' => array(
			'boxshadow'      	=> esc_html__( 'Box Shadow', 'nevo' ),
			'boxshadow-medium' 	=> esc_html__( 'Box Shadow Medium', 'nevo' ),
			'boxshadow-large'   => esc_html__( 'Box Shadow Large', 'nevo' ),
		),
		'core/columns' => array(
			'boxshadow'      	=> esc_html__( 'Box Shadow', 'nevo' ),
			'boxshadow-medium' 	=> esc_html__( 'Box Shadow Medium', 'nevo' ),
			'boxshadow-large'   => esc_html__( 'Box Shadow Large', 'nevo' ),
			'columns-122'  		=> esc_html__( 'Col-1-2-2', 'nevo' ),
			'columns-124'  		=> esc_html__( 'Col-1-2-4', 'nevo' ),
		),
		'core/group' => array(
			'boxshadow'      	=> esc_html__( 'Box Shadow', 'nevo' ),
			'boxshadow-medium' 	=> esc_html__( 'Box Shadow Medium', 'nevo' ),
			'boxshadow-large'   => esc_html__( 'Box Shadow Large', 'nevo' ),
		),
	);
	$block_styles = apply_filters('nevo_block_styles', $block_styles);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
	register_block_style( 'core/post-template', array(
		'name'         => 'columns-responsive',
		'label'        => __( 'Col Responsive', 'nevo' ),
		'inline_style' => '@media (max-width: 575.98px){.columns-4.wp-block-post-template-is-layout-grid.is-style-columns-responsive {
			grid-template-columns: 1fr!important;
		}}
		@media only screen and (min-width: 576px) and (max-width: 767.98px){.columns-4.wp-block-post-template-is-layout-grid.is-style-columns-responsive {
			grid-template-columns: repeat(2, minmax(0, 1fr))!important;
		}}
		@media only screen and (min-width: 600px) and (max-width: 991.98px){.columns-3.wp-block-post-template-is-layout-grid.is-style-columns-responsive {
			grid-template-columns: repeat(2, minmax(0, 1fr))!important;
		}}'
	) );
	$block_pattern_categories = array(
		'nevo-homepage' 	=> array('label' => __('Nevo: Homepage Templates', 'nevo')),
		'nevo-header' 		=> array('label' => __('Nevo: Header', 'nevo')),
		'nevo-footer' 		=> array('label' => __('Nevo: Footer', 'nevo')),
		'nevo-banner' 		=> array('label' => __('Nevo: Banner/Hero', 'nevo')),
		'nevo-aboutus' 		=> array('label' => __('Nevo: About Us', 'nevo')),
		'nevo-cta' 			=> array('label' => __('Nevo: CTA Section', 'nevo')),
		'nevo-features' 	=> array('label' => __('Nevo: Features', 'nevo')),
		'nevo-services'		=> array('label' => __('Nevo: Our Service', 'nevo')),
		'nevo-portfolio' 	=> array('label' => __('Nevo: Portfolio', 'nevo')),
		'nevo-counter' 		=> array('label' => __('Nevo: Stats Counter', 'nevo')),
		'nevo-teams' 		=> array('label' => __('Nevo: Team', 'nevo')),
		'nevo-testimonials' => array('label' => __('Nevo: Testimonials', 'nevo')),
		'nevo-magazine' 	=> array('label' => __('Nevo: Magazine', 'nevo')),
		'nevo-pricing' 		=> array('label' => __('Nevo: Pricing Tables', 'nevo')),
		'nevo-brands' 		=> array('label' => __('Nevo: Brand Showcase', 'nevo')),
		'nevo-contacts' 	=> array('label' => __('Nevo: Contacts', 'nevo')),
		'nevo-products' 	=> array('label' => __('Nevo: WooCommerce Layouts', 'nevo')),
	);
	$block_pattern_categories = apply_filters('nevo_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}