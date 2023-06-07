<?php
/*
Template Name: WareHouse
*/
?>
 <?php get_header();?>

	<section class="warehouse--baner">
		<div class="warehouse--baner__container container">
				<?php
						$warehouse = get_field('warehouse--baner');
							if($warehouse):
									$title = $warehouse['warehouse--baner__title'];
							?>
									<h1 class="warehouse--baner__title"><?php echo $title; ?></h1>
							<?php 
								endif;
					?>
			<div class="warehouse--baner__wrapper">
				<div class="warehouse--baner__img">
					<?php
						$warehouse = get_field('warehouse--baner');
							if($warehouse):
									$img = $warehouse['warehouse--baner__img'];
							?>
									<img src=<?php echo $img; ?> alt="">
							<?php 
								endif;
					?>
				</div>
				<div class="warehouse--baner__content">
					<?php
						$warehouse = get_field('warehouse--baner');
							if($warehouse):
									$text = $warehouse['warehouse--baner__text'];
							?>
									<p class="warehouse--baner__text"><?php echo $text ?></p>
							<?php 
								endif;
					?>
					<a href="tel:+13137440805"><button class="warehouse--baner__btn btn">Call us +1 313-744-0805</button></a>
			</div>
		</div>
	</section>

	<section class="choose">
		<div class="choose__container container">
			<div class="choose__content">
				<?php
						$choose = get_field('choose--warehouse');
							if($choose):
									$title = $choose['choose__title--warehouse'];
									$text = $choose['choose__text--warehouse'];
							?>
								<h2 class="choose__title"><?php echo $title; ?></h2>
								<p class="choose__text--warehouse"><?php echo $text; ?></p>
							<?php 
								endif;
					?>
			</div>
					<?php
						$choose = get_field('choose--warehouse');
							if($choose):
									$img = $choose['choose__img--warehouse'];
							?>
							<div class="choose__img">
								<img src=<?php echo $img; ?> alt="">
							</div>
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
		<style>
			.benefits{
				margin: 0;
			}
		</style>
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