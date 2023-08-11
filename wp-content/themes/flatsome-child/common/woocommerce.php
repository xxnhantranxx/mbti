<?php 
// custom fields check out woocommecere customize
add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
function custom_override_checkout_fields($fields)
{
  // unset($fields['billing']['billing_postcode']);
  // unset($fields['billing']['billing_state']);
  //unset($fields['billing']['billing_address_2']);
  // unset($fields['billing']['billing_last_name']);
  unset($fields['billing']['billing_company']);
  // unset($fields['billing']['billing_city']);
  return $fields;
}

add_filter('woocommerce_billing_fields', 'remove_required_fields');
function remove_required_fields($fields)
{
  $fields['billing_email']['required'] = true;
  $fields['billing_first_name']['required'] = false;
  $fields['billing_state']['required'] = false;
  $fields['billing_address_2']['required'] = false;
  $fields['billing_last_name']['required'] = true;
  $fields['billing_company']['required'] = false;
  // $fields['billing_country']['required'] = false;
  $fields['billing_city']['required'] = false;
  return $fields;
}

add_filter('woocommerce_default_address_fields', 'override_address_fields');
function override_address_fields($address_fields)
{
  $address_fields['first_name']['placeholder'] = 'First name (optional)';
  $address_fields['last_name']['placeholder'] = 'Last name';
  $address_fields['address_1']['placeholder'] = 'Street address';
  $address_fields['city']['placeholder'] = 'Town / City';
  $address_fields['state']['placeholder'] = 'State';
  $address_fields['postcode']['placeholder'] = 'ZIP Code';
  return $address_fields;
}

add_filter('woocommerce_checkout_fields', 'override_billing_checkout_fields', 20, 1);
function override_billing_checkout_fields($fields)
{
  $fields['billing']['billing_phone']['placeholder'] = 'Phone';
  $fields['billing']['billing_email']['placeholder'] = 'Email';
  return $fields;
}

/*
 * Remove Yoast SEO Filters
 */
function custom_remove_yoast_seo_admin_filters() {
    global $wpseo_meta_columns;
    if ($wpseo_meta_columns) {
        remove_action('restrict_manage_posts', array($wpseo_meta_columns, 'posts_filter_dropdown'));
        remove_action('restrict_manage_posts', array($wpseo_meta_columns, 'posts_filter_dropdown_readability'));
    }
}
add_action('admin_init', 'custom_remove_yoast_seo_admin_filters', 20);


function wpa104537_filter_products_by_featured_status() {

    global $typenow, $wp_query;
    $output = '';
   if ($typenow=='product') :


       // Featured/ Not Featured
       $output .= "<select name='featured_status' id='dropdown_featured_status'>";
       $output .= '<option value="">'.__( 'Featured Statuses', 'woocommerce' ).'</option>';

       $output .="<option value='featured' ";
       if ( isset( $_GET['featured_status'] ) ) $output .= selected('featured', $_GET['featured_status'], false);
       $output .=">".__( 'Featured', 'woocommerce' )."</option>";

       $output .="<option value='normal' ";
       if ( isset( $_GET['featured_status'] ) ) $output .= selected('normal', $_GET['featured_status'], false);
       $output .=">".__( 'Not Featured', 'woocommerce' )."</option>";

       $output .="</select>";

       echo $output;
   endif;
}

add_action('restrict_manage_posts', 'wpa104537_filter_products_by_featured_status');
/**
 * Filter the products in admin based on options
 *
 * @access public
 * @param mixed $query
 * @return void
 */
function wpa104537_featured_products_admin_filter_query( $query ) {
    global $typenow;

    if ( $typenow == 'product' ) {

        // Subtypes
        if ( ! empty( $_GET['featured_status'] ) ) {
            if ( $_GET['featured_status'] == 'featured' ) {
                $query->query_vars['tax_query'][] = array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'slug',
                    'terms'    => 'featured',
                );
            } elseif ( $_GET['featured_status'] == 'normal' ) {
                $query->query_vars['tax_query'][] = array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'slug',
                    'terms'    => 'featured',
                    'operator' => 'NOT IN',
                );
            }
        }

    }

}
add_filter( 'parse_query', 'wpa104537_featured_products_admin_filter_query' );

// Replate price variation
add_action( 'woocommerce_before_single_product', 'move_variations_single_price', 1 );
function move_variations_single_price(){
  global $product, $post;
  if($product->is_type( 'variable' )){
    $min_price_for_display = $product->get_variation_price('min', true);
    $max_price_for_display = $product->get_variation_price('max', true);
    if (($min_price_for_display != $max_price_for_display) ) {
        add_action( 'woocommerce_single_product_summary', 'replace_variation_single_price', 10 );
    }
  }
}

function replace_variation_single_price() {
  ?>
<style>
.woocommerce-variation-price {
    display: none;
}
</style>
<script>
jQuery(document).ready(function($) {
    var priceselector = '.product p.price';
    var originalprice = $(priceselector).html();

    $(document).on('show_variation', function() {
        $(priceselector).html($('.single_variation .woocommerce-variation-price').html());
    });
    $(document).on('hide_variation', function() {
        $(priceselector).html(originalprice);
    });
});
</script>
<?php
}

// Change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_add_to_cart_button_text_single' ); 
function woocommerce_add_to_cart_button_text_single() {
    return __( 'Add to bag', 'woocommerce' ); 
}

// Change add to cart text on product archives page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_add_to_cart_button_text_archives' );  
function woocommerce_add_to_cart_button_text_archives() {
    return __( 'Add to bag', 'woocommerce' );
}




/** Remove product data tabs */
 
add_filter( 'woocommerce_product_tabs', 'my_remove_product_tabs', 98 );
function my_remove_product_tabs( $tabs ) {
  unset( $tabs['additional_information'] ); // To remove the additional information tab
  unset($tabs['reviews']);
  return $tabs;
}

add_action('woocommerce_after_single_product_summary', 'ShowReview', 15);
function ShowReview(){
    global $product;
    $id = $product->get_id();
    echo do_shortcode('[wc_photo_reviews_overall_rating_html product_id="'.$id.'" overall_rating_enable="on" rating_count_enable="on"]');
    echo do_shortcode('[wc_photo_reviews_shortcode pagination_position="center" show_product="on" mobile="on" filter="on" pagination_ajax="on" products="'.$id.'" comments_per_page="9"]');
}


function DocumentSingleProduct(){?>

<ul class="list_document_product">
    <?php
        global $post;
        $terms = wp_get_post_terms( $post->ID, 'product_cat' );
        foreach ( $terms as $term ) $categories[] = $term->slug;
        if ( in_array( 'rings', $categories ) ){ ?>
    <li class="item">
        <a href="#panel_rings">
            <img src="<?php echo home_url(); ?>/wp-content/themes/flatsome-child/img/diamond-ring-19.svg" alt="">
            <span>Ring Sizing & Fitting Guide</span>
            <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
    </li>
    <?php } ?>
    <li class="item">
        <a href="#panel_care">
            <img src="<?php echo home_url(); ?>/wp-content/themes/flatsome-child/img/diamond-79.svg" alt="">
            <span>Jewellery Care Guide</span>
            <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
    </li>
    <li class="item">
        <a href="#panel_materials">
            <img src="<?php echo home_url(); ?>/wp-content/themes/flatsome-child/img/creative-materials.svg" alt="">
            <span>Our Materials</span>
            <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
    </li>
</ul>
<div class="method-check-out">
    <h3>GUARANTEED SAFE CHECKOUT</h3>
    <div class="list-method-pay">
        <?php 
        // Check rows existexists.
          if( have_rows('icon_scurity','option') ):

            // Loop through rows.
            while( have_rows('icon_scurity','option') ) : the_row();

                // Load sub field value.
                $sub_value = get_sub_field('item_icon_scurity','option');
                // Do something...
                ?>
        <div class="item-pay"><img src="<?php echo $sub_value; ?>" alt=""></div>
        <?php
            // End loop.
            endwhile;

          // No value.
          else :
            // Do something...
          endif;
        ?>
    </div>
</div>
<?php }
add_action( 'woocommerce_single_product_summary', 'DocumentSingleProduct', 35 );


function wp_kama_woocommerce_after_single_product_action(){
    echo do_shortcode('[lightbox id="panel_rings" width="600px" padding="20px"][block id="tab-single-product-ring"][/lightbox]');
    echo do_shortcode('[lightbox id="panel_care" width="600px" padding="20px"][block id="tab-single-product-care"][/lightbox]');
    echo do_shortcode('[lightbox id="panel_materials" width="600px" padding="20px"][block id="tab-single-product-materials"][/lightbox]');
}
add_action( 'woocommerce_after_single_product', 'wp_kama_woocommerce_after_single_product_action' );


function CountdownProduct(){
    echo do_shortcode('[hurrytimer id="59825"]');
}
add_action( 'woocommerce_single_product_summary', 'CountdownProduct', 11 );


//Change position field checkout billing
add_filter( 'woocommerce_default_address_fields', 'mrks_woocommerce_default_address_fields' );

function mrks_woocommerce_default_address_fields( $fields ) {

    // default priorities: 
    // 'first_name' - 10
    // 'last_name' - 20
    // 'company' - 30
    // 'country' - 40
    // 'address_1' - 50
    // 'address_2' - 60
    // 'city' - 70
    // 'state' - 80
    // 'postcode' - 90

  // e.g. move 'company' above 'first_name':
  // just assign priority less than 10
  $fields['country']['priority'] = 1;

  return $fields;
}


function custom_update_allowed_countries( $countries ) {

    // Only on frontend
    if( is_admin() ) return $countries;

    if( class_exists( 'WC_Geolocation' ) ) {
        $location = WC_Geolocation::geolocate_ip();

        if ( isset( $location['country'] ) ) {
            $countryCode = $location['country'];
        } else {
            // If there is no country, then return allowed countries
            return $countries;
        }
    } else {
        // If you can't geolocate user country by IP, then return allowed countries
        return $countries;
    }

    // If everything went ok then I filter user country in the allowed countries array
    $user_country_code_array = array('US');

    $intersect_countries = array_intersect_key( $countries, array_flip( $user_country_code_array ) );

    return $intersect_countries;
}
add_filter( 'woocommerce_countries_allowed_countries', 'custom_update_allowed_countries', 30, 1 );

// Handle count cart
add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
function wc_refresh_mini_cart_count($fragments){
    ob_start();
    $items_count = WC()->cart->get_cart_contents_count();
    ?>
<div id="mini-cart-count"><?php echo $items_count ? $items_count : '0'; ?></div>
<?php
        $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}
//Show address
add_filter( 'woocommerce_order_get_formatted_billing_address', 'add_custom_field_billing_address', 10, 3 );
function add_custom_field_billing_address( $address, $raw_address, $order ) {

    $countries = new WC_Countries();
    // gets country and state codes
    $billing_country = $order->get_billing_country();
    $billing_state = $order->get_billing_state();
    // gets the full names of the country and state
    $full_country = ( isset( $countries->countries[ $billing_country ] ) ) ? $countries->countries[ $billing_country ] : $billing_country;
    $full_state = ( $billing_country && $billing_state && isset( $countries->states[ $billing_country ][ $billing_state ] ) ) ? $countries->states[ $billing_country ][ $billing_state ] : $billing_state;

    $data = array(
        '<div class="field-order-bill"><i class="fa-light fa-user"></i><span>'.$order->get_billing_first_name() . ' ' . $order->get_billing_last_name().'</span></div>',
        '<div class="field-order-bill"><i class="fa-light fa-location-dot"></i><span>'.$full_country.', ',
        $full_state.', ',
        $order->get_billing_city().', ',
        $order->get_billing_address_1().'</span></div>',
        $order->get_billing_address_2(),
        $order->get_meta( '_billing_area', true ),             // or $order->get_meta( 'billing_area', true )
        $order->get_meta( '_billing_emirates', true ),         // or $order->get_meta( 'billing_emirates', true )
        $order->get_meta( '_billing_nearest_landmark', true ), // or $order->get_meta( 'billing_nearest_landmark', true )
        $order->get_billing_company(),
    );

    // removes empty fields from the array
    $data = array_filter( $data );
    // create the billing address using the "<br/>" element as a separator
    $address = implode( '', $data );
    
    echo $address;
}

// Tự động xoá bảng cntt_actionscheduler_actions trong 1 ngày
add_filter( 'action_scheduler_retention_period', 'wp_action_scheduler_purge' );
/**
 * Change Action Scheduler default purge to 1 days
 */
function wpb_action_scheduler_purge() {
 return DAY_IN_SECONDS; #1 ngày
 #return WEEK_IN_SECONDS; #7 ngày
}
add_filter( 'action_scheduler_pastdue_actions_check_pre', '__return_false' );

remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
add_action( 'woocommerce_review_order_after_cart_contents', 'woocommerce_checkout_coupon_form_custom' );
function woocommerce_checkout_coupon_form_custom() {
    echo '<tr class="coupon-form"><td colspan="2">';
    wc_get_template(
        'checkout/form-coupon.php',
        array(
            'checkout' => WC()->checkout(),
        )
    );
    echo '</tr></td>';?>
<?php }
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );

add_action( 'woocommerce_review_order_after_shipping', 'my_custom_display_payments', 10 );
function my_custom_display_payments() {
    if ( WC()->cart->needs_payment() ) {
      $available_gateways = WC()->payment_gateways()->get_available_payment_gateways();
      WC()->payment_gateways()->set_current_gateway( $available_gateways );
    } else {
      $available_gateways = array();
    }
    ?>
<div class="gap-gray"></div>
<div id="checkout_payments">
    <h3><?php esc_html_e( 'Payment', 'woocommerce' ); ?></h3>
    <p class="description-pay">All transactions are secure and encrypted.</p>
    <?php if ( WC()->cart->needs_payment() ) : ?>
    <ul class="wc_payment_methods payment_methods methods">
        <?php
      if ( ! empty( $available_gateways ) ) {
        foreach ( $available_gateways as $gateway ) {
          wc_get_template( 'checkout/payment-method.php', array( 'gateway' => $gateway ) );
        }
      } else {
        echo '<li class="woocommerce-notice woocommerce-notice--info woocommerce-info">' . apply_filters( 'woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? esc_html__( 'Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce' ) : esc_html__( 'Please fill in your details above to see available payment methods.', 'woocommerce' ) ) . '</li>'; // @codingStandardsIgnoreLine
      }
      ?>
    </ul>
    <div class="form-row place-order">
        <noscript>
            <?php
                /* translators: $1 and $2 opening and closing emphasis tags respectively */
                printf( esc_html__( 'Since your browser does not support JavaScript, or it is disabled, please ensure you click the %1$sUpdate Totals%2$s button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'woocommerce' ), '<em>', '</em>' );
                ?>
            <br /><button type="submit" class="button alt" name="woocommerce_checkout_update_totals"
                value="<?php esc_attr_e( 'Update totals', 'woocommerce' ); ?>"><?php esc_html_e( 'Update totals', 'woocommerce' ); ?></button>
        </noscript>

        <?php wc_get_template( 'checkout/terms.php' ); ?>

        <?php do_action( 'woocommerce_review_order_before_submit' ); ?>

        <?php echo apply_filters( 'woocommerce_order_button_html', '<button type="submit" class="button alt hide-for-small" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( 'Pay now' ) . '" data-value="' . esc_attr( 'Pay now' ) . '">' . esc_html( 'Pay now' ) . '</button>' ); // @codingStandardsIgnoreLine ?>

        <?php do_action( 'woocommerce_review_order_after_submit' ); ?>

        <?php wp_nonce_field( 'woocommerce-process_checkout', 'woocommerce-process-checkout-nonce' ); ?>
    </div>
    <?php endif; ?>
</div>
<?php
  }

  add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );
  
// validator phone bill
// Limit Woocommerce phone field to usa number
add_action('woocommerce_checkout_process', 'njengah_custom_checkout_field_process');
function njengah_custom_checkout_field_process() {
  global $woocommerce;
    // Check if set, if its not set add an error. This one is only requite for companies
  if ( !(preg_match('/^\(?([2-9]\d{2})\)?[- ]?(\d{3})[- ]?(\d{4})$/', $_POST['billing_phone'] )) && !(preg_match('/^\+\d{1,} \([2-9]\d{2}\) \d{3}-\d{4}$/', $_POST['billing_phone'] )) && !(preg_match('/^\d{1,} \([2-9]\d{2}\) \d{3}-\d{4}$/', $_POST['billing_phone'] ))){
      wc_add_notice( "Incorrect Phone Number! Please check again"  ,'error' );
  }
}

function my_theme_modify_stripe_fields_styles( $styles ) {
  return array(
      'base' => array(
          'iconColor'     => '#666EE8',
          'color'         => '#31325F',
          'fontSize'      => '16px',
          '::placeholder' => array(
              'color' => '#CFD7E0',
          ),
      ),
  );
}

add_filter( 'wc_stripe_elements_styling', 'my_theme_modify_stripe_fields_styles' );