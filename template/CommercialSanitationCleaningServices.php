<?php
/*
Template Name: ComercialSanitation
*/
  ?>

	<?php get_header();?>


	<section class="manufac--baner">
		<div class="manufac--baner__container container">
				<?php
						$banner = get_field('manufac--baner');
							if($banner):
									$title = $banner['manufac--title'];
							?>
									<h1 class="manufac--baner__title"><?php echo $title?></h1>
							<?php 
								endif;
					?>
			<div class="manufac--baner__wrapper">
					<?php
						$banner = get_field('manufac--baner');
							if($banner):
									$img = $banner['manufac--baner__img'];
									$text= $banner['manufac--baner__text']
							?>
									<div class="manufac--baner__img">
											<img src=<?php echo $img; ?> alt="">
									</div>
								<div class="manufac--baner__content">
									<p class="manufac--baner__text"><?php echo $text; ?></p>
									<a href="tel:+13137440805"><button class="manufac--baner__btn btn">Call us +1 313-744-0805</button></a>
								</div>
							<?php 
								endif;
					?>
		</div>
	</section>

	<section class="offers">
		<div class="offers__container container">
					<?php
						$offers = get_field('offers');
							if($offers):
									$text= $offers['offers__text']
							?>
								<div><?php echo $text?></div>
							<?php 
								endif;
					?>
		
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