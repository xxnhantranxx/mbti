<?php
add_filter('use_block_editor_for_post', '__return_false');

//Add All CSS AND SCRIPT TO FOOTER
function prefix_add_footer_styles() {
	wp_register_style('customcss', get_stylesheet_directory_uri() .'/css/custom.css');
	wp_enqueue_style('customcss');
	wp_register_style('cssres', get_stylesheet_directory_uri() .'/css/responsive.css');
	wp_enqueue_style('cssres');
	wp_register_script('jscore', get_stylesheet_directory_uri() . '/js/js-core.js');
	wp_enqueue_script('jscore');
};
add_action( 'get_footer', 'prefix_add_footer_styles' );

//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    $existing_mimes['webp'] = 'image/svg+xml';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

//Cho phép Upload định dang rar/ zip lên web
function zip_upload_mimes($existing_mimes = array()) {
    $existing_mimes['zip'] = 'application/zip';
    $existing_mimes['gz'] = 'application/x-gzip';
    $existing_mimes['rar'] = 'application/vnd.rar';
    return $existing_mimes;
}
add_filter('upload_mimes', 'zip_upload_mimes', 999, 1);

//** * Enable preview / thumbnail for webp image files.*/
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);


// Add Socical Page
//register settings
function theme_options_add(){
    register_setting( 'theme_settings', 'theme_settings' );
}
 
//add settings page to menu
function add_options() {
add_menu_page( __( 'Socical Plus' ), __( 'Socical Plus' ), 'manage_options', 'settings', 'theme_options_page');
}
//add actions
add_action( 'admin_init', 'theme_options_add' );
add_action( 'admin_menu', 'add_options' );
 
//start settings page
function theme_options_page() {
    if ( ! isset( $_REQUEST['updated'] ) ):
    $_REQUEST['updated'] = false;
    //get variables outside scope
    global $color_scheme;
    ?>
    <div> 
        <form method="post" action="options.php">
            <h2>Socical Plus</h2>
            <?php settings_fields( 'theme_settings' ); ?>
            <?php $options = get_option( 'theme_settings' ); ?>
            <div class="Socical_Settings">
                <div class="itemSocical">
                    <p>
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" name="theme_settings[emails]" value="<?php esc_attr_e( $options['emails'] ); ?>" placeholder="Tiêu đề email" />
                        <input type="text" name="theme_settings[linkemails]" value="<?php esc_attr_e( $options['linkemails'] ); ?>" placeholder="Link email" />
                    </p>
                </div>
                <div class="itemSocical">
                    <p>
                        <i class="fa-brands fa-facebook"></i>
                        <input type="text" name="theme_settings[facebook]" value="<?php esc_attr_e( $options['facebook'] ); ?>" placeholder="Tiêu đề facebook" />
                        <input type="text" name="theme_settings[linkface]" value="<?php esc_attr_e( $options['linkface'] ); ?>" placeholder="Link facebook" />
                    </p>
                </div>
                <div class="itemSocical">
                    <p>
                        <i class="fa-brands fa-facebook-messenger"></i>
                        <input type="text" name="theme_settings[messenger]" value="<?php esc_attr_e( $options['messenger'] ); ?>" placeholder="Tiêu đề messenger" />
                        <input type="text" name="theme_settings[linkmess]" value="<?php esc_attr_e( $options['linkmess'] ); ?>" placeholder="Link messenger" />
                    </p>
                </div>
                <div class="itemSocical">
                    <p>
                        <i class="fa-brands fa-whatsapp"></i>
                        <input type="text" name="theme_settings[whatsapp]" value="<?php esc_attr_e( $options['whatsapp'] ); ?>" placeholder="Tiêu đề whatsapp" />
                        <input type="text" name="theme_settings[linkwhatsapp]" value="<?php esc_attr_e( $options['linkwhatsapp'] ); ?>" placeholder="Link whatsapp" />
                    </p>
                </div>
                <div class="itemSocical">
                    <p>
                        <i class="fa-solid fa-phone"></i>
                        <input type="text" name="theme_settings[hotline]" value="<?php esc_attr_e( $options['hotline'] ); ?>" placeholder="Tiêu đề Hotline" />
                        <input type="text" name="theme_settings[linkhotline]" value="<?php esc_attr_e( $options['linkhotline'] ); ?>" placeholder="Link Hotline" />
                    </p>
                </div>
                <div class="itemSocical">
                    <p>
                        <i class="fa-solid fa-clock"></i>
                        <input type="text" name="theme_settings[clockHour]" value="<?php esc_attr_e( $options['clockHour'] ); ?>" placeholder=" Tiêu đề giờ" />
                    </p>
                </div>
            </div>
        <p><input name="submit" id="submit" value="Save Changes" type="submit"></p>
        </form>
    </div><!-- END wrap -->
<?php endif; }

function socical_devmd($args, $content) {
    ob_start(); 
    $options = get_option( 'theme_settings' );
    ?>
    
    <div class="socical_custom_devmd">
        <ul class="socicalDevmd">
            <?php
            if($options['emails']){?>
                <li>
                    <a href="<?php esc_attr_e( $options['linkemails'] ); ?>">
                    <i class="fa-solid fa-envelope"></i>
                    <?php esc_attr_e( $options['emails'] ); ?>
                </a>
                </li>
            <?php } 
            if($options['facebook']){?>
            <li>
                <a href="<?php esc_attr_e( $options['linkface'] ); ?>">
                <i class="fa-brands fa-facebook"></i>
                <?php esc_attr_e( $options['facebook'] ); ?>
                </a>
            </li>
            <?php }
            if($options['messenger']){?>
                <li>
                    <a href="<?php esc_attr_e( $options['linkmess'] ); ?>">
                    <i class="fa-brands fa-facebook-messenger"></i>
                    <?php esc_attr_e( $options['messenger'] ); ?>
                    </a>
                </li>
            <?php }
            if($options['whatsapp']){?>
                <li>
                    <a href="<?php esc_attr_e( $options['linkwhatsapp'] ); ?>">
                    <i class="fa-brands fa-whatsapp"></i>
                    <?php esc_attr_e( $options['whatsapp'] ); ?>
                    </a>
                </li>
            <?php }
            if($options['hotline']){?>
                <li>
                    <a href="<?php esc_attr_e( $options['linkhotline'] ); ?>">
                    <i class="fa-solid fa-phone"></i>
                    <?php esc_attr_e( $options['hotline'] ); ?>
                    </a>
                </li>
            <?php }
            if($options['clockHour']){?>
                <li>
                    <a>
                    <i class="fa-solid fa-clock"></i>
                    <?php esc_attr_e( $options['clockHour'] ); ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>

    <?php
    $socicaldevmd = ob_get_contents();
    ob_end_clean();
    return $socicaldevmd;
}
add_shortcode( 'socicals', 'socical_devmd' );

if ( ! function_exists( 'hiepdesign_mce_text_sizes' ) ) {
    function hiepdesign_mce_text_sizes( $initArray ){
        $initArray['fontsize_formats'] = "9pt 10pt 12pt 13pt 14pt 16pt 18pt 21pt 24pt 28pt 32pt 34pt 36pt 48pt 50pt 52pt 54pt 56pt 58pt 60pt 62pt 64pt 68pt 70pt 72pt";
        return $initArray;
    }
    add_filter( 'tiny_mce_before_init', 'hiepdesign_mce_text_sizes', 99 );
}

function cntt_ux_builder_element(){
	$link_img = home_url().'/wp-content/themes/flatsome-child/img/forms.svg';
	
    add_ux_builder_shortcode('FormContact', array(
        'type' => 'container',
        'allow' => array( 'contact-form-7'),
        'name'      => __('Wapper Contact'),
        'category'  => __('Restaurant'),
        'priority'  => 8,
        'thumbnail' =>  $link_img_section,
        'wrap'   => false,
        'inline' => true,
        'options'   => array(
            'class' => array(
                'type' => 'textfield',
                'heading' => __('Class'),
            ),
            'title' => array(
                'type' => 'textarea',
                'full_width' => true,
                'heading' => 'Tiêu đề',
            ),
            'description' => array(
                'type' => 'textarea',
                'full_width' => true,
                'heading' => 'Mô tả',
            ),
            'id' => array(
                'type' => 'image',
                'heading' => __('Image'),
            ),
            'icon_1' => array(
                'type' => 'image',
                'heading' => __('Image Phone'),
            ),
            'numberphone' => array(
                'type' => 'textfield',
                'heading' => 'Số điện thoại',
            ),
            'icon_2' => array(
                'type' => 'image',
                'heading' => __('Image Email'),
            ),
            'email' => array(
                'type' => 'textfield',
                'heading' => 'Email',
            ),
            'color_manage' => array(
                'type' => 'group',
                'heading' => 'Màu sắc',
                'options' => array(
                    'mau_nen' => array(
                    'type' => 'colorpicker',
                    'heading' => 'Màu nền',
                    'format' => 'rgb',
                    'helpers' => require( __DIR__ . '/helpers/colors.php' ),
                    ),
                    'mau_tieude' => array(
                        'type' => 'colorpicker',
                        'heading' => 'Tiêu đề',
                        'format' => 'rgb',
                        'helpers' => require( __DIR__ . '/helpers/colors.php' ),
                    ),
                    'description_color' => array(
                        'type' => 'colorpicker',
                        'heading' => 'Mô tả',
                        'format' => 'rgb',
                        'helpers' => require( __DIR__ . '/helpers/colors.php' ),
                    ),
                    'button_color' => array(
                        'type' => 'colorpicker',
                        'heading' => 'Màu nút',
                        'format' => 'rgb',
                        'helpers' => require( __DIR__ . '/helpers/colors.php' ),
                    ),
                    'button_color_hover' => array(
                        'type' => 'colorpicker',
                        'heading' => 'Màu nút hover',
                        'format' => 'rgb',
                        'helpers' => require( __DIR__ . '/helpers/colors.php' ),
                    ),
                ),
            ),
        ),
    ));
}
add_action('ux_builder_setup', 'cntt_ux_builder_element');

// Wapper Contact
function WapperContact($atts,$content){
    ob_start();
        if (empty($atts['class']) == true) {
            $class = "";
        }else{
            $class = $atts['class'];
        }
        if (empty($atts['title']) == true) {
            $title = "";
        }else{
            $title = $atts['title'];
        }
        if (empty($atts['description']) == true) {
            $description = "";
        }else{
            $description = $atts['description'];
        }
        if (empty($atts['numberphone']) == true) {
            $numberphone = "";
        }else{
            $numberphone = $atts['numberphone'];
        }
        if (empty($atts['email']) == true) {
            $email = "";
        }else{
            $email = $atts['email'];
        }
        if(empty($atts['id']) == false){
            $image = wp_get_attachment_image_url($atts['id'], 'full');
        }else{
            $image = '';
        }
        if(empty($atts['icon_1']) == false){
            $icon_1 = wp_get_attachment_image_url($atts['icon_1'], 'full');
        }else{
            $icon_1 = '';
        }
        if(empty($atts['icon_2']) == false){
            $icon_2 = wp_get_attachment_image_url($atts['icon_2'], 'full');
        }else{
            $icon_2 = '';
        }
        // Màu sắc
        if (empty($atts['mau_nen']) == true) {
            $mau_nen = "";
        }else{
            $mau_nen = $atts['mau_nen'];
        }

        if (empty($atts['mau_tieude']) == true) {
            $mau_tieude = "";
        }else{
            $mau_tieude = $atts['mau_tieude'];
        }

        if (empty($atts['description_color']) == true) {
            $description_color = "";
        }else{
            $description_color = $atts['description_color'];
        }

        if (empty($atts['contentbg_color']) == true) {
            $contentbg_color = "";
        }else{
            $contentbg_color = $atts['contentbg_color'];
        }

        if (empty($atts['button_color']) == true) {
            $button_color = "";
        }else{
            $button_color = $atts['button_color'];
        }

        if (empty($atts['button_color_hover']) == true) {
            $button_color_hover = "";
        }else{
            $button_color_hover = $atts['button_color_hover'];
        }
        
    ?>
    <style>
        <?php
        if(empty($atts['button_color']) != true){ ?>
            .contact-service-form .form-group .field-btn .wpcf7-submit{
                background-color: <?php echo $button_color; ?> !important;
                border:1px solid <?php echo $button_color; ?> !important;
            }
        <?php } 
        if(empty($atts['button_color_hover']) != true){ ?>
            .contact-service-form .form-group .field-btn .wpcf7-submit:hover{
                background-color: <?php echo $button_color_hover; ?> !important;
            }
        <?php } ?>
    </style>
    <div class="WapperContact <?php echo $class; ?>" style="background:<?php echo $mau_nen; ?>" id="contact-page">
    <div class="row row-small align-middle main-contact">
        <div class="col nopadding_bottom medium-4 small-12 large-4">
            <div class="col-inner">
                <div class="img has-hover img-contact x md-x lg-x y md-y lg-y">
                    <div class="img-inner dark">
                        <img src="<?php echo $image; ?>" class="attachment-original size-original">
                    </div>
                </div>
            </div>
        </div>
        <div class="col nopadding_bottom medium-4 small-12 large-4">
            <div class="col-inner">
                <div class="wapper-contact-center">
                    <div class="lable-title" style="color:<?php echo $mau_tieude; ?>"><?php echo $title; ?></div>
                    <div class="des-contact" style="color:<?php echo $description_color; ?>"><?php echo $description; ?></div>
                    <ul class="list-contact-method">
                        <li class="item phone">
                            <img src="<?php echo $icon_1; ?>" alt="">
                            <a href="tel:<?php echo $numberphone; ?>" class="d-block" style="color:<?php echo $description_color; ?>"><?php echo $numberphone; ?></a>
                        </li>
                        <li class="item email">
                            <img src="<?php echo $icon_2; ?>" alt="">
                            <a href="mailto:<?php echo $email; ?>" class="d-block" style="color:<?php echo $description_color; ?>"><?php echo $email; ?></a>
                        </li>
                     </ul>
                </div>
            </div>
        </div>
        <div class="col nopadding_bottom medium-4 small-12 large-4">
            <div class="col-inner">
                <?php echo do_shortcode($content); ?>
            </div>
        </div>
    </div>
    </div>
    <?php 
    $contentShortcode = ob_get_contents();
    ob_end_clean();
    return $contentShortcode;
}
add_shortcode('FormContact', 'WapperContact');

// Add lightbox if product dont have price
function popup_form_contact()
{
  echo do_shortcode('[lightbox id="popup-form-contact" width="1400px"][block id="contact"][/lightbox]');
}
add_action('wp_footer', 'popup_form_contact');