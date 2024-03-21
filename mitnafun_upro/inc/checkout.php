<?php


add_filter( 'woocommerce_checkout_fields' , 'quadlayers_remove_checkout_fields' );

function quadlayers_remove_checkout_fields( $fields ) {

    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_state']);
    unset($fields['order']['order_comments']);
    unset($fields['shipping']['shipping_first_name']);
    unset($fields['shipping']['shipping_last_name']);
    unset($fields['shipping']['shipping_company']);
    unset($fields['shipping']['shipping_country']);
  //  unset($fields['shipping']['shipping_address_1']);
    unset($fields['shipping']['shipping_address_2']);
  //  unset($fields['shipping']['shipping_city']);
    unset($fields['shipping']['shipping_postcode']);
    unset($fields['shipping']['shipping_state']);

    return $fields;

}

add_filter( 'woocommerce_shipping_fields' , 'quadlayers_remove_checkout_fields2' );
function quadlayers_remove_checkout_fields2($fields) {
    $fields['shipping_address_1']['required'] = false;
    $fields['shipping_city']['required'] = false;
    return $fields;
}

/* add custom checkout field */
//add_action( 'wc_new_fields', 'add_custom_checkout_field' );

function add_custom_checkout_field( $checkout ) {
    $current_user = wp_get_current_user();
    $billing_guests = $current_user->billing_guests;
    woocommerce_form_field( 'billing_guests', array(
        'type' => 'text',
        'class' => '',
        'label' => __('כמות המשתתפים', 'mit'),
        'placeholder' => '',
        'required' => true,
        'default' => $billing_guests,
    ), $checkout->get_value( 'billing_guests' ) );

    woocommerce_form_field( 'billing_check', array(
        'type' => 'text',
        'class' => '',
        'label' => __('כמות המשתתפים', 'mit'),
        'placeholder' => '',
        'required' => true,
        'default' => $billing_guests,
    ), $checkout->get_value( 'billing_check' ) );
}


add_action( 'woocommerce_checkout_process', 'validate_new_checkout_field' );

function validate_new_checkout_field() {

    $shipping = WC()->session->get('chosen_shipping_methods');




    if ( ! $_POST['billing_guests'] ) {
        wc_add_notice( '<strong>'.__('כמות המשתתפים', 'mit').'</strong> '.__('is a required field.', 'yos') . $shippinng[0], 'error' );
    }


    if ( ! $_POST['billing_check'] ) {
        wc_add_notice( '<strong>'.__('Need to accept', 'mit').'</strong> '.__('is a required field.', 'yos'), 'error' );
    }


    if ('flat_rate:2' === $shipping[0] && (empty($_POST['coderockz_woo_delivery_date_field']) || empty($_POST['coderockz_woo_delivery_time_field']))) {
        wc_add_notice( '<strong>'.__('Select delivery date and time', 'mit').'</strong> '.__('is a required field.', 'yos'), 'error' );
    }

    if ('flat_rate:2' === $shipping[0] ) {
        if (empty($_POST['shipping_address_1']))
            wc_add_notice( '<strong>'.__('כתובת רחוב', 'mit').'</strong> '.__('הוא שדה חובה.', 'yos'), 'error' );

        if (empty($_POST['shipping_city']))
            wc_add_notice(  '<strong>'.__('עיר', 'mit').'</strong> '.__('הוא שדה חובה.', 'yos'), 'error' );

    }
    if ('local_pickup:1' === $shipping[0] && (empty($_POST['coderockz_woo_delivery_pickup_date_field']) || empty($_POST['coderockz_woo_delivery_pickup_time_field']))) {
        wc_add_notice( '<strong>'.__('Select pick-up date and time', 'mit').'</strong> '.__('is a required field.', 'yos'), 'error' );
    }

}

add_action( 'woocommerce_checkout_update_order_meta', 'save_new_checkout_field' );

function save_new_checkout_field( $order_id ) {
    if ( $_POST['billing_guests'] ) update_post_meta( $order_id, '_billing_guests', esc_attr( $_POST['billing_guests'] ) );
}

add_action( 'woocommerce_thankyou', 'show_new_checkout_field_thankyou' );

function show_new_checkout_field_thankyou( $order_id ) {
    if ( get_post_meta( $order_id, '_billing_guests', true ) ) echo '<p><strong>'. __('כמות המשתתפים', 'yos').': </strong> ' . get_post_meta( $order_id, '_billing_guests', true ) . '</p>';
}

add_action( 'woocommerce_admin_order_data_after_billing_address', 'show_new_checkout_field_order' );

function show_new_checkout_field_order( $order ) {
    $order_id = $order->get_id();
    if ( get_post_meta( $order_id, '_billing_guests', true ) ) echo '<p><strong>'. __('כמות המשתתפים', 'yos').': </strong> ' . get_post_meta( $order_id, '_billing_guests', true ) . '</p>';
}

add_action( 'woocommerce_email_after_order_table', 'show_new_checkout_field_emails', 20, 4 );

function show_new_checkout_field_emails( $order, $sent_to_admin, $plain_text, $email ) {
    if ( get_post_meta( $order->get_id(), '_billing_guests', true ) ) echo '<p><strong>'. __('כמות המשתתפים', 'yos').': </strong> ' . get_post_meta( $order->get_id(), '_billing_guests', true ) . '</p>';
}


remove_action('woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20);
add_action('woocommerce_payment_placement', 'woocommerce_checkout_payment', 20);


add_filter( 'woocommerce_form_field', 'bbloomer_remove_optional_checkout_fields', 9999 );

function bbloomer_remove_optional_checkout_fields( $field ) {
    $field = str_replace( '&nbsp;<span class="optional">(אופציונלי)</span>', '', $field );
    return $field;
}

add_action('template_redirect', function(){
    if (is_cart())
        wp_redirect(get_permalink(12)     );
});
