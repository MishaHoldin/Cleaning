<?php
/*
Template Name: location
*/
  ?>
	<?php get_header();?>

	<section class="map">
		<div class="map__container container">
			<?php echo do_shortcode( '[display-map id="388"]' ); ?>
		</div>
	</section>

<?php get_footer();?>