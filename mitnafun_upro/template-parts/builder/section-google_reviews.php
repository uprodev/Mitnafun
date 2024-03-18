<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="testimonials">
		<div class="content-width">
			<div class="title-wrap">

				<?php if ($field = get_field('title_1', 'option')): ?>
					<div class="title">
						<h2 class="title-h2"><?= $field ?></h2>
					</div>
				<?php endif ?>
				
				<?php if ($field = get_field('text_1', 'option')): ?>
					<div class="text">
						<p><?= $field ?></p>
					</div>
				<?php endif ?>
				
				<div class="nav-wrap">
					<div class="swiper-button-next testimonials-next"><img src="<?= get_stylesheet_directory_uri() ?>/img/arrow-testimonials.svg" alt=""></div>
					<div class="swiper-button-prev testimonials-prev"><img src="<?= get_stylesheet_directory_uri() ?>/img/arrow-testimonials.svg" alt=""></div>
				</div>
			</div>
			<div class="slider-wrap">
				<div class="swiper testimonials-slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="logo">
								<img src="img/logo-1-1.svg" alt="">
							</div>
							<div class="name">
								<figure>
									<img src="img/img-3.jpg" alt="">
								</figure>
								<p>שֵׁם</p>
							</div>

							<div class="stars-wrap">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
							</div>
							<div class="info">
								<p>איכות טובה, תואמת את התיאור. הילד שלי שמח!</p>
							</div>
							<div class="link-wrap">
								<a href="#"><img src="img/arrow-link.svg" alt=""> קרא עוד</a>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="logo">
								<img src="img/logo-1-2.svg" alt="">
							</div>
							<div class="name">
								<figure>
									<img src="img/img-3.jpg" alt="">
								</figure>
								<p>Alexey Piparinen</p>
							</div>

							<div class="stars-wrap">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
							</div>
							<div class="info">
								<p>איכות טובה, תואמת את התיאור. הילד שלי שמח!</p>
							</div>
							<div class="link-wrap">
								<a href="#"><img src="img/arrow-link.svg" alt=""> קרא עוד</a>
							</div>
						</div>

						<?php if ($url = get_field('link_1', 'option')['url']): ?>
							<div class="swiper-slide slide-btn">
								<a href="<?= $url ?>" class="btn" target="_blank">

									<?php if ($field = get_field('link_1', 'option')['title']): ?>
										<?= $field ?>
									<?php endif ?>
									
									<?php if ($field = get_field('link_1', 'option')['text']): ?>
										<span><?= $field ?></span>
									<?php endif ?>
									
								</a>
							</div>
						<?php endif ?>
						
						<div class="swiper-slide">
							<div class="logo">
								<img src="img/logo-1-1.svg" alt="">
							</div>
							<div class="name">
								<figure>
									<img src="img/img-3.jpg" alt="">
								</figure>
								<p>שֵׁם</p>
							</div>

							<div class="stars-wrap">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
							</div>
							<div class="info">
								<p>איכות טובה, תואמת את התיאור. הילד שלי שמח!</p>
							</div>
							<div class="link-wrap">
								<a href="#"><img src="img/arrow-link.svg" alt=""> קרא עוד</a>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="logo">
								<img src="img/logo-1-2.svg" alt="">
							</div>
							<div class="name">
								<figure>
									<img src="img/img-3.jpg" alt="">
								</figure>
								<p>Alexey Piparinen</p>
							</div>

							<div class="stars-wrap">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
								<img src="img/star.svg" alt="">
							</div>
							<div class="info">
								<p>איכות טובה, תואמת את התיאור. הילד שלי שמח!</p>
							</div>
							<div class="link-wrap">
								<a href="#"><img src="img/arrow-link.svg" alt=""> קרא עוד</a>
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

	<?php endif; ?>