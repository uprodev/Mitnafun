<div class="aside woocommerce-checkout-review-order-table"">
    <h3 class="title">פרטי השירות</h3>

    <?php
    do_action( 'woocommerce_before_mini_cart_contents' );


    woocommerce_mini_cart();

    ?>

<div class="text">
    <div class="line"></div>
    <ul>

        <li><p>פרטי התשלום</p></li>
        <li>
            <p>סך הכל</p>
            <p><?php wc_cart_totals_order_total_html(); ?></p>
        </li>


    </ul>

    <div class="link-wrap">
        <a href="#" class="show-text"><img src="<?= get_template_directory_uri() ?>/img/icon-17.svg" alt=""> מדיניות ביטולים</a>
        <div class="info-text">
            <p> אלה הוסברו לי ואני מסכים לתוכנם אלה הוסברו לי ואני מסכים לתוכנם אלה הוסברו לי ואני מסכים לתוכנם אלה הוסברו לי ואני מסכים לתוכנם אלה הוסברו לי ואני מסכים לתוכנם אלה הוסברו לי ואני מסכים לתוכנם</p>
        </div>
    </div>
</div>



</div>
