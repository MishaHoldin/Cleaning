<?php
/*
Template Name: home
*/
  ?>

	<?php get_header();?>
	<section class="banner">
		<div class="banner__container container">
			<div class="banner__content">
					<?php
						$banner = get_field('banner');
							if($banner):
									$title = $banner['title'];
									$text= $banner['text']
							?>
									<p class="banner__title">
										<?php echo $title; ?>
									</p>
									<h1 class="banner__text">
										<?php echo $text; ?>
									</h1>
							<?php 
								endif;
					?>
				<div class="banner__item">
					<button class="banner__btn btn">Get Started <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.png" alt=""></button>
					<p class="banner__subtext">View All Services</p>
				</div>
			</div>
				<?php
					$banner = get_field('banner');
						if($banner):
								$image = $banner['image'];
						?>
								<img class="banner__img" 
									src="<?php echo $image ?>"
									alt="">
						<?php 
							endif;
				?>
		</div>
	</section>

	<section class="services">
		<div class="services__container container">
			<div class="services__side">
				<h2 class="services__title">Our Services and Industries</h2>
			</div>
			<div class="services__content">
					<?php if( have_rows('services') ): ?>
						<?php while( have_rows('services') ): the_row(); 
							$title = get_sub_field('services__title');
							$text = get_sub_field('services__text');
							$link = get_sub_field('services__link');
							?>
								<div class="services__item">
									<h3 class="services__subtitle"><?php echo $title ?></h3>
									<p class="services__text"><?php echo $text ?></p>
									<a class="services__more" href="<?php echo $link?>">View More</a>
								</div>
						<?php endwhile; ?>
					<?php endif; ?>
			</div>
		</div>
	</section>

	<section class="clean">
		<div class="clean__container container">
			<div class="clean__content">
					<?php if( have_rows('clean') ): ?>
						<?php while( have_rows('clean') ): the_row(); 
							$title = get_sub_field('clean__title');
							$text = get_sub_field('clean__text');
							?>
								<h2 class="clean__title"><?php echo $title ?></h2>
								<p class="clean__text"> <?php echo $text ?></p>
						<?php endwhile; ?>
					<?php endif; ?>
					<button class="clean__btn btn">View More</button>
			</div>
			<div class="clean__img">
					<?php if( have_rows('clean') ): ?>
						<?php while( have_rows('clean') ): the_row(); 
							$img = get_sub_field('clean__img');
							?>
								<img src="<?php echo $img ?>" alt="">
						<?php endwhile; ?>
					<?php endif; ?>
				
			</div>
		</div>
	</section>

<section class="modal">
		<div class="modal__container container">
			<div class="modal__img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/modal.png" alt="">
			</div>
				<?php echo do_shortcode( '[contact-form-7 id="426" title="Forma"]' ); ?>
		</div>
	</section>

	<section class="benefits">
		<div class="benefits__container container">
			<div class="benefits__head">
				<?php if( have_rows('benefits') ): ?>
					<?php while( have_rows('benefits') ): the_row(); 
						$title = get_sub_field('benefits__title');
						$subtitle = get_sub_field('benefits__subtitle');
						$text = get_sub_field('benefits__text');
						?>
							<h3 class="benefits__title"><?php echo $title ?></h3>
							<h3 class="benefits__subtitle"><?php echo $subtitle ?></h3>
							<p class="benefits__text"> <?php echo $text ?></p>
					<?php endwhile; ?>
				<?php endif; ?>	
			</div>
			<div class="benefits__content">
					<?php
					// Встановлюємо контекст групи полів за допомогою the_field()
					if( have_rows('benefits') ):
							while( have_rows('benefits') ): the_row();
									// Перевіряємо, чи є повторення для повторювального поля
									if( have_rows('benefits__item') ):
											while( have_rows('benefits__item') ): the_row();
													// Отримуємо значення внутрішнього поля для поточного повторення
													$subtitle = get_sub_field('benefits__subtext');
													// Виводимо значення поля
													echo '<div class="benefits__item">
														<h3 class="benefits__number "></h3>
														<p class="benefits__subtext">' . esc_html($subtitle) . '</p>
													</div>';
											endwhile;
									endif;
							endwhile;
					endif;
					?>
			</div>
			<div class="benefits__bottom">
				<?php if( have_rows('benefits') ): ?>
					<?php while( have_rows('benefits') ): the_row(); 
						$footer = get_sub_field('benefits__footer');
						?>
							<p class="benefits__footer"><?php echo $footer ?></p>
					<?php endwhile; ?>
				<?php endif; ?>	
			</div>
		</div>
	</section>

	<section class="respons">
		<div class="respons__container container">
			<div class="respons__head">
				<h2 class="respons__title">Testimonials</h2>
				<h3 class="respons__subtitle">What our clients say</h3>
			</div>
			<div class="respons-swiper">
				<div class="respons__wrapper swiper-wrapper">
					<?php if( have_rows('coments') ): ?>
						<?php while( have_rows('coments') ): the_row(); 
							$title = get_sub_field('coments__title');
							$name = get_sub_field('coments__name');
							$description = get_sub_field('coments__description');
							?>
								<div class="respons__slide swiper-slide">
									<img class="respons__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/respons.png" alt="">
									<h3 class="respons__subtext"><?php echo $title; ?></h3>
									<h4 class="respons__name"><?php echo $name; ?></h4>
									<p class="respons__description"><?php echo $description; ?></p>
								</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="faq">
		<div class="faq__container container">
			<div class="faq__head">
				<h2 class="faq__title">FAQ</h2>
				<h3 class="faq__subtitle">Frequently Asked Questions</h3>
			</div>
				<?php if( have_rows('faq') ): ?>
					<?php while( have_rows('faq') ): the_row(); 
						$text = get_sub_field('faq__text');
						$img = get_sub_field('faq__img');
						$subtext = get_sub_field('faq__subtext')
						?>
							<div class="faq__accordion">
								<div class="faq__accordion--header">
									<p class="faq__number "></p>
									<h3 class="faq__text"><?php echo $text;?></h3>
									<img class="faq__img" 
									src="<?php echo $img ?>"
									alt="">
								</div>
								<div class="faq__accordion--content">
									<p class="faq__subtext">
										<?php echo $subtext; ?>
								</div>
							</div>
					<?php endwhile; ?>
				<?php endif; ?>
			<button class="faq__btn btn">View More</button>
		</div>
	</section>

  <?php get_footer();?>