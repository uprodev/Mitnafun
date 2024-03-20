<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;



if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>


<section class="product-info">
    <div class="bg">
        <img src="<?= get_template_directory_uri() ?>/img/after-7.svg" alt="">
    </div>
    <div class="content-width">
        <div class="content">
            <div class="mob-title">
                <h2 class="title"><?php the_title() ?></h2>
            </div>

            <?php woocommerce_show_product_images () ?>

            <div class="text-wrap">
                <h1>ספיידרמן</h1>
                <ul class="list-info">
                    <li><?= $product->get_price_html()  ?></li>
                    <li>הסדנה 1, כפר סבא</li>
                </ul>
                <div class="btn-wrap">
                    <a href="?add-to-cart=<?= $product->get_id()  ?>" class="btn-default btn-blue btn-mini">פרטים נוספים</a>
                </div>
                <h6 class="sub-title">תיאור המתקן:</h6>
               <?php // the_content() ?>
                <?= $product->get_short_description()  ?>

            </div>
        </div>
    </div>
</section>

<section class="item-2x-text">
    <div class="content-width">
        <h2 class="title-h3">פרטי המוצר</h2>
        <div class="content">
            <div class="item">
                <h6 class="title">כמה ילדים באירוע?</h6>
                <p>למתנפח ספיידרמן אנו ממליצים יחס של עד 15-20 ילדים באירוע,
                    הילדים יתחלפו במהלך הזמן.</p>
            </div>
            <div class="item">
                <h6 class="title">תיאור המתקן:</h6>
                <p>פיידרמן במתקן מתנפח מהסרטים, המתקן כולל משטח קפיצה גדול במיוחד, טיפוס ומגלשה גבוהה. המנתפח עשוי בד חזק במיוחד, מסוגל להכיל מספר רב של ילדים ומתאים גם לאירועים גדולים.</p>
            </div>
            <div class="item">
                <h6 class="title">שימו לב ! <br>
                    - המתקן גדול לא נכנס לרכב פרטי ולכן צריך להגיע עם טנדר או עגלה .</h6>
            </div>
            <div class="item">
                <h6 class="title">לאיזה גילאים מתאים?</h6>
                <p>לילדים עד גיל 12</p>
            </div>
            <div class="item">
                <h6 class="title">מידות:</h6>
                <ul>
                    <li>
                        <p>אורך- 5.0 מטרים</p>
                        <p>רוחב-5.0 מטרים</p>
                    </li>
                </ul>
            </div>
            <div class="item">
                <h6 class="title">כמה משתתפים יכולים להיות במתקן באותו הזמן?</h6>
                <p>עד 10 ילדים, כמובן שמספר זה עשוי להשתנות בהתאם לגיל, לגודל ולפעילות הילדים.</p>
            </div>
        </div>
    </div>
</section>

<section class="title-border-block">
    <div class="bg">
        <img src="<?= get_template_directory_uri() ?>/img/after-8.svg" alt="" class="img-1">
        <img src="<?= get_template_directory_uri() ?>/img/after-9.svg" alt="" class="img-2">
        <img src="<?= get_template_directory_uri() ?>/img/after-10.svg" alt="" class="img-3">
    </div>
    <div class="content-width">
        <h2 class="title-h3">מדיניות ביטולים</h2>
        <div class="content">
            <div class="text">
                <p>ביטול הזמנה ו/או השכרה של ציוד תעשה <a href="#">עד 72</a> <a href="#">שעות</a> לפני תקופת ההשכרה, ובלבד שניתן אישור על ידי מתנפחים ונהנים.
                </p>
                <p>
                    למען הסר ספק, לא יוחזר תשלום בעת ביטול הזמנה או השכרה <a href="#">במסגרת 72</a> השעות לפני תקופת ההשכרה.</p>
            </div>
            <div class="img-wrap">
                <figure>
                    <img src="<?= get_template_directory_uri() ?>/img/icon-8.svg" alt="">
                </figure>
                <div class="wrap">
                    <p>יש ליצור קשר בטלפון </p>
                    <p><a href="tel:+0505544516">050-5544516</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php do_action( 'woocommerce_after_single_product' ); ?>
