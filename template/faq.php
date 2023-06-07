
<?php
/*
Template Name: FAQ
*/
  ?>

	<?php get_header();?>

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
		</div>
		<style>
			.faq{
				padding-bottom: 80px;
			}
		</style>
	</section>

	<?php get_footer();?>