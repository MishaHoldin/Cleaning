<?php
/*
Template Name: ManufactoringCleaning
*/
  ?>
  <?php get_header();?>

	<section class="manufac--baner">
		<div class="manufac--baner__container container">
			<h1 class="manufac--baner__title">Manufacturing Cleaning Services</h1>
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

	<section class="choose">
		<div class="choose__container container">
			<?php
				$choose = get_field('choose');
					if($choose):
							$title = $choose['choose__title'];
							$text= $choose['choose__text'];
							$img= $choose['choose__img'];
					?>
							<div class="choose__content">
								<h2 class="choose__title"><?php echo $title; ?></h2>
								<p class="choose__text"><?php echo $text; ?></p>
							</div>
					<?php 
					endif;
					?>
			
				<?php
					$choose = get_field('choose');
						if($choose):
							$img= $choose['choose__img'];
					?>
						<div class="choose__img">
							<img src=<?php echo $img; ?> alt="">
						</div>
					<?php 
					endif;
				?>
		</div>
	</section>

	<section class="industrial">
		<div class="industrial__container container">
			<div class="industrial__head">
				<?php if( have_rows('industrial') ): ?>
					<?php while( have_rows('industrial') ): the_row(); 
						$title = get_sub_field('industrial__title');
						$subtitle = get_sub_field('industrial__subtitle');
						$text = get_sub_field('industrial__text');
						?>
							<h3 class="industrial__title"><?php echo $title ?></h3>
							<h2 class="industrial__subtitle"><?php echo $subtitle ?></h2>
							<p class="industrial__text"><?php echo $text ?></p>
					<?php endwhile; ?>
				<?php endif; ?>	
			</div>
			<div class="industrial__content">
					<?php
					// Встановлюємо контекст групи полів за допомогою the_field()
					if( have_rows('industrial') ):
							while( have_rows('industrial') ): the_row();
									// Перевіряємо, чи є повторення для повторювального поля
									if( have_rows('industrial__item') ):
											while( have_rows('industrial__item') ): the_row();
													// Отримуємо значення внутрішнього поля для поточного повторення
													$subtitle = get_sub_field('industrial__subtext');
													// Виводимо значення поля
													echo '<div class="industrial__item">
														<h3 class="industrial__number "></h3>
														<p class="industrial__subtext">' . esc_html($subtitle) . '</p>
													</div>';
											endwhile;
									endif;
							endwhile;
					endif;
					?>
			</div>
				<?php
						$industrial = get_field('industrial');
							if($industrial):
									$footer = $industrial['industrial__footer'];
							?>
									<div class="industrial__bottom">
											<p class="industrial__footer"><?php echo $footer?></p>
									</div>
							<?php 
								endif;
					?>
		</div>
	</section>

	<section class="faq">
		<div class="faq__container container">
			<div class="faq__head">
				<h2 class="faq__title">FAQ</h2>
				<h3 class="faq__subtitle">Frequently Asked Questions</h3>
			</div>
				<?php if( have_rows('faq__maufac') ): ?>
					<?php while( have_rows('faq__maufac') ): the_row(); 
						$text = get_sub_field('faq__text');
						$img = get_sub_field('faq__img');
						$subtext = get_sub_field('faq__subtext')
						?>
							<div class="faq__accordion">
								<div class="faq__accordion--header">
									<p class="faq__number "></p>
									<h3 class="faq__text"><?php echo $text;?></h3>
									<img id="faq__img" class="faq__img" 
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
