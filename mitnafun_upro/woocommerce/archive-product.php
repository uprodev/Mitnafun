<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );



?>


    <section class="category">
        <div class="content-width">
            <h1><?php the_archive_title('', false)        ?></h1>
            <div action="#">
                <div class="select-line">
                    <div class="wrap">


                        <div class="select-line">
                            <div class="wrap">
                                <?php $terms = get_terms(['taxonomy' => 'product_cat']);

                                foreach ($terms as $term) { ?>
                                <div class="input-wrap-checkbox">
<label>
                                    <a class="<?= get_queried_object_id() == $term->term_id ? 'selected' : ''  ?>" href="<?= get_term_link($term->term_id, 'product_cat') ?>"><?= $term->name ?></a>
</label>    </div>

                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="content">

                    <?php
                    while ( have_posts() ) {
                        the_post();

                        /**
                         * Hook: woocommerce_shop_loop.
                         */
                        do_action( 'woocommerce_shop_loop' );

                        wc_get_template_part( 'content', 'product' );
                    }

                    ?>

                </div>
                <div class="link-wrap">
                    <?php woocommerce_pagination() ?>
                </div>
            </div>
        </div>
    </section>

    <section class="btn-block">
        <div class="bg">
            <img src="<?= get_template_directory_uri() ?>/img/after-6-1.svg" alt="" class="img-1">
            <img src="<?= get_template_directory_uri() ?>/img/after-6-2.svg" alt="" class="img-2">
        </div>
        <div class="content-width">
            <div class="btn-wrap">
                <a href="#" class="btn-border"><img src="<?= get_template_directory_uri() ?>/img/icon-6.svg" alt=""><span>פתח את המדריך למשתמש</span></a>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="content-width">
            <h2 class="title-h2">מתנפחים להשכרה
                | מה צריך לדעת?</h2>
            <ul class="accordion">
                <li class="accordion-item">
                    <div class="accordion-thumb"><p>איך זה עובד?</p></div>
                    <div class="accordion-panel">
                        <div class="wrap">
                            <p>השכרת המתנפחים באיסוף עצמי מכפר סבא.</p>
                        </div>
                    </div>
                </li>
                <li class="accordion-item">
                    <div class="accordion-thumb"><p>האם נכנס ברכב פרטי?</p></div>
                    <div class="accordion-panel">
                        <div class="wrap">
                            <p>השכרת המתנפחים באיסוף עצמי מכפר סבא.</p>
                        </div>
                    </div>
                </li>
                <li class="accordion-item">
                    <div class="accordion-thumb"><p>יש הובלה?</p></div>
                    <div class="accordion-panel">
                        <div class="wrap">
                            <p>השכרת המתנפחים באיסוף עצמי מכפר סבא.</p>
                        </div>
                    </div>
                </li>
                <li class="accordion-item">
                    <div class="accordion-thumb"><p>איך מנפחים?</p></div>
                    <div class="accordion-panel">
                        <div class="wrap">
                            <p>השכרת המתנפחים באיסוף עצמי מכפר סבא.</p>
                        </div>
                    </div>
                </li>
                <li class="accordion-item">
                    <div class="accordion-thumb"><p>כמה זמן לוקח לנפח?</p></div>
                    <div class="accordion-panel">
                        <div class="wrap">
                            <p>השכרת המתנפחים באיסוף עצמי מכפר סבא.</p>
                        </div>
                    </div>
                </li>
                <li class="accordion-item">
                    <div class="accordion-thumb"><p>אין חשמל מה עושים?</p></div>
                    <div class="accordion-panel">
                        <div class="wrap">
                            <p>השכרת המתנפחים באיסוף עצמי מכפר סבא.</p>
                        </div>
                    </div>
                </li>
                <li class="accordion-item">
                    <div class="accordion-thumb"><p>כמה מקום צריך?</p></div>
                    <div class="accordion-panel">
                        <div class="wrap">
                            <p>השכרת המתנפחים באיסוף עצמי מכפר סבא.</p>
                        </div>
                    </div>
                </li>
                <li class="accordion-item">
                    <div class="accordion-thumb"><p>איך אוכל לדעת שהציוד נקי ותקין?</p></div>
                    <div class="accordion-panel">
                        <div class="wrap">
                            <p>השכרת המתנפחים באיסוף עצמי מכפר סבא.</p>
                        </div>
                    </div>
                </li>
                <li class="accordion-item">
                    <div class="accordion-thumb"><p>האם המתנפחים בטוחים?</p></div>
                    <div class="accordion-panel">
                        <div class="wrap">
                            <p>השכרת המתנפחים באיסוף עצמי מכפר סבא.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="testimonials">
        <div class="content-width">
            <div class="title-wrap">
                <div class="title">
                    <h2 class="title-h2">ביקורות</h2>
                </div>
                <div class="text">
                    <p>הנה מה שהזמינו את השירותים שלנו אומרים.</p>
                </div>
                <div class="nav-wrap">
                    <div class="swiper-button-next testimonials-next"><img src="<?= get_template_directory_uri() ?>/img/arrow-testimonials.svg" alt=""></div>
                    <div class="swiper-button-prev testimonials-prev"><img src="<?= get_template_directory_uri() ?>/img/arrow-testimonials.svg" alt=""></div>
                </div>
            </div>
            <div class="slider-wrap">
                <div class="swiper testimonials-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="logo">
                                <img src="<?= get_template_directory_uri() ?>/img/logo-1-1.svg" alt="">
                            </div>
                            <div class="name">
                                <figure>
                                    <img src="<?= get_template_directory_uri() ?>/img/img-3.jpg" alt="">
                                </figure>
                                <p>שֵׁם</p>
                            </div>

                            <div class="stars-wrap">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                            </div>
                            <div class="info">
                                <p>איכות טובה, תואמת את התיאור. הילד שלי שמח!</p>
                            </div>
                            <div class="link-wrap">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>/img/arrow-link.svg" alt=""> קרא עוד</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="logo">
                                <img src="<?= get_template_directory_uri() ?>/img/logo-1-2.svg" alt="">
                            </div>
                            <div class="name">
                                <figure>
                                    <img src="<?= get_template_directory_uri() ?>/img/img-3.jpg" alt="">
                                </figure>
                                <p>Alexey Piparinen</p>
                            </div>

                            <div class="stars-wrap">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                            </div>
                            <div class="info">
                                <p>איכות טובה, תואמת את התיאור. הילד שלי שמח!</p>
                            </div>
                            <div class="link-wrap">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>/img/arrow-link.svg" alt=""> קרא עוד</a>
                            </div>
                        </div>
                        <div class="swiper-slide slide-btn">
                            <a href="#" class="btn">רוצה להשאיר ביקורת?<span>לחץ על הכפתור הזה וכתוב מה אתה חושב על השירותים שלנו :)</span></a>
                        </div>
                        <div class="swiper-slide">
                            <div class="logo">
                                <img src="<?= get_template_directory_uri() ?>/img/logo-1-1.svg" alt="">
                            </div>
                            <div class="name">
                                <figure>
                                    <img src="<?= get_template_directory_uri() ?>/img/img-3.jpg" alt="">
                                </figure>
                                <p>שֵׁם</p>
                            </div>

                            <div class="stars-wrap">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                            </div>
                            <div class="info">
                                <p>איכות טובה, תואמת את התיאור. הילד שלי שמח!</p>
                            </div>
                            <div class="link-wrap">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>/img/arrow-link.svg" alt=""> קרא עוד</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="logo">
                                <img src="<?= get_template_directory_uri() ?>/img/logo-1-2.svg" alt="">
                            </div>
                            <div class="name">
                                <figure>
                                    <img src="<?= get_template_directory_uri() ?>/img/img-3.jpg" alt="">
                                </figure>
                                <p>Alexey Piparinen</p>
                            </div>

                            <div class="stars-wrap">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                                <img src="<?= get_template_directory_uri() ?>/img/star.svg" alt="">
                            </div>
                            <div class="info">
                                <p>איכות טובה, תואמת את התיאור. הילד שלי שמח!</p>
                            </div>
                            <div class="link-wrap">
                                <a href="#"><img src="<?= get_template_directory_uri() ?>/img/arrow-link.svg" alt=""> קרא עוד</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-btn btn-mob">
                <a href="#" class="btn">רוצה להשאיר ביקורת?<span>לחץ על הכפתור הזה וכתוב מה אתה חושב על השירותים שלנו :)</span></a>
            </div>
        </div>
    </section>


 <?php get_footer() ?>
