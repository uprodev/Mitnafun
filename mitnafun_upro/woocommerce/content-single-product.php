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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

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
                <h2 class="title">ספיידרמן</h2>
            </div>
            <div class="slider-wrap">
                <div class="swiper product-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="img/img-6.jpg" data-fancybox="gallery">
                                <img src="<?= get_template_directory_uri() ?>/img/img-6.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="img/img-6.jpg" data-fancybox="gallery">
                                <img src="<?= get_template_directory_uri() ?>/img/img-6.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-next product-next product-btn"><img src="<?= get_template_directory_uri() ?>/img/icon-7.svg" alt=""></div>
                    <div class="swiper-button-prev product-prev product-btn"><img src="<?= get_template_directory_uri() ?>/img/icon-7.svg" alt=""></div>
                </div>
            </div>
            <div class="text-wrap">
                <h1>ספיידרמן</h1>
                <ul class="list-info">
                    <li>550 ₪</li>
                    <li>הסדנה 1, כפר סבא</li>
                </ul>
                <div class="btn-wrap">
                    <a href="#" class="btn-default btn-blue btn-mini">פרטים נוספים</a>
                </div>
                <h6 class="sub-title">תיאור המתקן:</h6>
                <p>תיאור המתקן: ספיידרמן במתקן מתנפח מהסרטים, המתקן כולל משטח קפיצה גדול במיוחד, טיפוס ומגלשה גבוהה. המנתפח עשוי בד
                    חזק במיוחד, מסוגל להכיל מספר רב של ילדים ומתאים גם לאירועים גדולים.</p>

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

<section class="date-block">
    <div class="content-width">
        <ul class="breadcrumb">
            <li><a href="index.html"><img src="<?= get_template_directory_uri() ?>/img/icon-9.svg" alt="">חזרה</a></li>
        </ul>
        <div class="title">
            <h1>מכונת סוכר</h1>
            <p>תקופת השכרת הציוד היא ל 24 שעות. איסוף הציוד באמצע שבוע יתבצע בערב לפני האירוע בשעה 20:00. החזרת הציוד תתבצע ביום האירוע בשעה 20:00. איסוף הציוד ליום שבת יתבצע ביום שישי בשעה 14:00 והחזרתו במוצ"ש ב20:00. הזמנות ליום ה' יוחזר עד יום שישי בשעה 14:00

            </p>
        </div>
        <form action="#">
            <div class="content">
                <div class="item item-1">
                    <div class="line-top">
                        <h2 class="sub-title">בחירת תאריך ושעה</h2>
                    </div>
                    <div class="wrap">
                        <div class="input-wrap">
                            <label for="date1"></label>
                            <input type="text" class="date1" name="date" id="date1">
                        </div>
                    </div>


                </div>
                <div class="item item-2">
                    <div class="line-top select-block">
                        <p>אזור זמן:</p>
                        <label class="form-label" for="select-time"></label>
                        <select id="select-time">
                            <option value="0" >שעון ישראל (חורף) (GMT+2)</option>
                            <option value="1">שעון ישראל (חורף) (GMT+1)</option>
                        </select>
                    </div>
                    <div class="wrap">
                        <p>יום שבת, 27 בינואר</p>
                        <div class="wrap-checkbox">
                            <div class="input-wrap-checkbox">
                                <input type="radio" name="date-1-1" id="date-1-1">
                                <label for="date-1-1">20-00</label>
                            </div>
                            <div class="input-wrap-checkbox">
                                <input type="radio" name="date-1-1" id="date-1-2">
                                <label for="date-1-2">20-00</label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="item item-3">
                    <div class="line-top">
                        <h2 class="sub-title">פרטי השירות</h2>
                    </div>
                    <div class="wrap">
                        <figure>
                            <img src="<?= get_template_directory_uri() ?>/img/img-7.jpg" alt="">
                        </figure>
                        <div class="text">
                            <div class="wrap">
                                <p>27 בינואר 2024 בשעה 20:00</p>
                                <p>הסדנה 1, כפר סבא</p>
                                <ul>
                                    <li>550 ₪</li>
                                    <li>24 שע'</li>
                                </ul>
                            </div>
                        </div>
                        <div class="select-block">
                            <p>העדפות</p>
                            <label class="form-label" for="select-1"></label>
                            <select id="select-1">
                                <option value="0" >מתקן</option>
                                <option value="1">מתקן1</option>
                                <option value="1">מתקן2</option>
                            </select>
                        </div>
                        <div class="btn-wrap">
                            <a href="#" class="btn-default btn-blue btn-mini">הבא</a>
                        </div>
                    </div>


                </div>
            </div>
        </form>


    </div>
</section>


<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
