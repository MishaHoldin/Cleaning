<?php
/*
Template Name: MeetProcesing
*/
  ?>

	<?php get_header();?>

	<section class="manufac--baner">
		<div class="manufac--baner__container container">
			<h1 class="manufac--baner__title">Manufacturing Cleaning Services</h1>
			<div class="manufac--baner__wrapper">
					<?php
						$banner = get_field('warehouse--baner');
							if($banner):
									$img = $banner['warehouse--baner__img'];
									$text= $banner['warehouse--baner__text']
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

	<section class="general--cleaning">
		<div class="general--cleaning__container container">
			<div class="general--cleaning__img">
					<?php
						$genral = get_field('general--cleaning');
							if($genral):
									$img = $genral['general__img'];
							?>
								<img src=<?php echo $img?> alt="">
							<?php 
								endif;
					?>
			</div>
			<div class="general--cleaning__content">
					<?php
						$genral = get_field('general--cleaning');
							if($genral):
									$title = $genral['general__title'];
									$text = $genral['general__text'];
							?>
								<h2 class="general--cleaning__title"><?php echo $title; ?></h2>
								<p class="general--cleaning__text"><?php echo $text; ?></p>
								<button class="general--cleaning__btn btn">View More</button>
							<?php 
								endif;
					?>
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