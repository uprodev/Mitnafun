<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<section class="checkout">
    <div class="content-width">
        <ul class="breadcrumb">
            <li><a href="index.html"><img src="<?= get_template_directory_uri() ?>/img/icon-9.svg" alt="">חזרה</a></li>
        </ul>
        <h1>ביצוע הזמנה</h1>
        <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>">
            <div class="content">
                <div class="main">
                    <h3 class="title">פרטים</h3>
                    <div class="form-wrap form-default">
                        <div class="input-wrap">
                            <input type="text" name="billing_first_name" id="name" placeholder="Name" required>
                            <label for="name">שם פרטי *</label>
                        </div>
                        <div class="input-wrap">
                            <input type="text" name="billing_last_name" id="surname" placeholder="Surname" required>
                            <label for="surname">שם משפחה *</label>
                        </div>
                        <div class="input-wrap">
                            <input type="email" name="billing_email" id="email" placeholder="example@gmail.com" required>
                            <label for="email">שם משפחה *</label>
                        </div>
                        <div class="input-wrap">
                            <input type="tel" name="billing_phone" id="tel" placeholder="+972 000 000 00 00" required class="tel">
                            <label for="tel">מספר טלפון *</label>
                        </div>
                        <div class="input-wrap">
                            <input type="number" name="billing_guests" id="number" placeholder="10" required>
                            <label for="number">כמות המשתתפים *</label>
                        </div>
                        <div class="input-wrap-checked">
                            <input type="checkbox" name="billing_" id="check" checked value="1">
                            <label for="check">הנני מאשר כי קיבלתי לידי את התנאים הכלליים המצורפים על נספחיהם, אלה הוסברו לי ואני מסכים לתוכנם</label>
                        </div>
                    </div>




                </div>
                <div class="aside">
                    <h3 class="title">פרטי השירות</h3>

                    <?php
                    do_action( 'woocommerce_before_mini_cart_contents' );


                    woocommerce_mini_cart();

                    ?>

                    <div class="link-wrap">
                        <a href="#" class="show-text"><img src="<?= get_template_directory_uri() ?>/img/icon-17.svg" alt=""> מדיניות ביטולים</a>
                        <div class="info-text">
                            <p> אלה הוסברו לי ואני מסכים לתוכנם אלה הוסברו לי ואני מסכים לתוכנם אלה הוסברו לי ואני מסכים לתוכנם אלה הוסברו לי ואני מסכים לתוכנם אלה הוסברו לי ואני מסכים לתוכנם אלה הוסברו לי ואני מסכים לתוכנם</p>
                        </div>
                    </div>



                </div>

            </div>


            <div class="content">
                <div class="main">
                    <h3 class="title">משלוח</h3>
                    <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                </div>
                <div class="aside">
                    <h3 class="title">Payment</h3>
                    <?php woocommerce_checkout_payment(); ?>
                </div>
            </div>
        </form>


    </div>
</section>
