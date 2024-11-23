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
    // Get the paths and URIs of the child and parent themes
    $child_dir_uri  = get_stylesheet_directory_uri();
    $parent_dir_uri = get_template_directory_uri();
    $child_dir_path = get_stylesheet_directory();
    $parent_dir_path = get_template_directory();

    // Check the filter to allow the child theme to automatically assign a favicon
    $pre = apply_filters('nevo_pre_load_favicon', false);

    // If there is a favicon from the filter, use it (ensure it's a valid URL)
    if ($pre !== false) {
        return esc_url(trim($pre));
    }

    // Function to check if favicon exists in a given path and return its URI
    static $cached_favicon = null; // Cache to avoid redundant checks

    if ($cached_favicon === null) {
        $find_favicon = function($dir_path, $dir_uri) {
            foreach (['png', 'ico'] as $ext) {
                $favicon_path = "$dir_path/assets/images/favicon.$ext";
                if (@is_file($favicon_path)) { // Use @ to suppress warnings if path is inaccessible
                    return "$dir_uri/assets/images/favicon.$ext";
                }
            }
            return false;
        };

        // Check child theme, then parent theme for favicon
        $cached_favicon = $find_favicon($child_dir_path, $child_dir_uri) ?: 
                          $find_favicon($parent_dir_path, $parent_dir_uri) ?: '';
    }

    // Allow editing of favicon path via filter
    return esc_url(trim(apply_filters('nevo_favicon_url', $cached_favicon)));
}

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_scripts' );
function child_theme_enqueue_scripts() {
	
}

require get_stylesheet_directory() . '/inc/languages/nevo-languages.php';

require get_stylesheet_directory() . '/inc/wp-optimize/optimize.php';

$true = true;
if(class_exists( 'WooCommerce' ) || function_exists( 'wc' )) {
	$true = false;
}

$optimisations = [
    'block_external_HTTP'       => false, // Chặn các yêu cầu đến địa chỉ HTTP bên ngoài. Do đó, chặn tất cả các yêu cầu được thực hiện bởi các plugin đến các địa chỉ bên ngoài.
                                        // Block requests to external HTTP addresses. This blocks all requests made by plugins to external addresses.
    'defer_CSS'                 => false, // Trì hoãn việc tải tất cả các kịch bản đã đăng ký bằng cách sử dụng hàm loadCSS từ Filament Group.
                                        // Defer the loading of all registered scripts using the loadCSS function from Filament Group.
    'defer_JS'                  => true,  // Thêm defer="defer" cho tất cả các tệp JavaScript đã được đăng ký. (trì hoãn quá trình xử lý JS)
                                        // Add defer="defer" to all registered JavaScript files. (delays JS execution)
    'classic_widget'            => true, // Bật màn hình cài đặt widget cổ điển trong Giao diện - Widget và Tùy biến. Vô hiệu hóa trình chỉnh sửa khối khỏi việc quản lý tiện ích con.
                                        // Enable the classic widget screen in Appearance - Widgets and Customizer. Disable block editor for widget management.
    'disable_comments'          => false, // Tắt chức năng bình luận và loại bỏ nó khỏi menu quản trị.
                                        // Disable the comment feature and remove it from the admin menu.
    'disable_classic_styles'    => true, // Loại bỏ kiểu dáng của giao diện classic theme.
                                        // Remove styles associated with classic themes.
    'disable_block_styling'     => true, // Loại bỏ kiểu dáng mặc định của các khối Gutenberg.
                                        // Remove default Gutenberg block styles.
    'disable_global_styles'     => true, // Xóa các biến CSS WordPress/Gutenberg mặc định và định nghĩa SVG khỏi giao diện người dùng.
                                        // Remove default WordPress/Gutenberg CSS variables and SVG definitions from the frontend.
    'disable_embed'             => true, // Loại bỏ các tệp script được đăng ký bởi hệ thống nhúng phương tiện của WordPress.
                                        // Remove scripts registered by WordPress media embedding.
    'disable_emoji'             => true, // Loại bỏ các tệp script được đăng ký để hiển thị biểu tượng cảm xúc.
                                        // Remove scripts registered for emoji rendering.
    'disable_feeds'             => true, // Loại bỏ các nguồn cấp dữ liệu bài viết.
                                        // Remove post feeds.
    'disable_heartbeat'         => true, // Hủy đăng ký các tệp script heartbeat, thường làm nhiệm vụ tự động lưu.
                                        // Unregister heartbeat scripts, typically used for autosave tasks.
    'disable_jquery'            => $true, // Loại bỏ tệp script jQuery mặc định. Nếu trang web hoặc plugin phụ thuộc jQuery thì không nên loại bỏ.
                                        // Remove the default jQuery script. Do not remove if the site or plugins rely on jQuery.
    'disable_jquery_migrate'    => $true, // Loại bỏ tệp script jQuery Migrate. Nếu trang web hoặc plugin phụ thuộc jQuery thì không nên loại bỏ.
                                        // Remove jQuery Migrate script. Do not remove if the site or plugins rely on jQuery.
    'disable_rest_api'          => true, // Vô hiệu hóa REST API.
                                        // Disable REST API.
    'disable_RSD'               => true, // Loại bỏ liên kết RSD trong phần head của trang web.
                                        // Remove RSD links from the website's head section.
    'disable_shortlinks'        => true, // Loại bỏ các liên kết ngắn trong phần head của trang web.
                                        // Remove shortlinks from the website's head section.
    'disable_theme_editor'      => false, // Vô hiệu hóa trình chỉnh sửa tệp cho chủ đề và plugin.
                                        // Disable the file editor for themes and plugins.
    'disable_version_numbers'   => true, // Loại bỏ phiên bản được liên kết trong các tệp script và kiểu đã được đăng ký.
                                        // Remove version numbers linked in registered scripts and styles.
    'disable_WLW_manifest'      => true, // Loại bỏ các liên kết WLW Manifest trong phần head của trang web.
                                        // Remove WLW Manifest links from the website's head section.
    'disable_WP_version'        => true, // Loại bỏ phiên bản WP trong phần head của trang web.
                                        // Remove WP version from the website's head section.
    'disable_XMLRPC'            => true, // Vô hiệu hóa chức năng XML-RPC.
                                        // Disable XML-RPC functionality.
    'jquery_to_footer'          => true, // Di chuyển tệp script jQuery mặc định xuống cuối trang.
                                        // Move the default jQuery script to the footer.
    'limit_comments_JS'         => true, // Giới hạn việc sử dụng JS cho bình luận chỉ đối với các thực thể đơn lẻ.
                                        // Limit comment JS usage to single entities only.
    'limit_revisions'           => true, // Giới hạn số lần sửa đổi thành 5.
                                        // Limit post revisions to 5.
    'remove_comments_style'     => true, // Loại bỏ kiểu dáng .recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
                                        // Remove styles like .recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
    'slow_heartbeat'            => true, // Chậm lại nhịp tim thành một lần mỗi phút.
                                        // Slow down the heartbeat to one per minute.
    'instant_page'              => true, // Tải trước khi người dùng click vào liên kết.
                                        // Preload pages before the user clicks links.
    'smooth_scroll'             => true  // Kích hoạt cuộn trang mượt mà.
                                        // Enable smooth scrolling on the website.
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
