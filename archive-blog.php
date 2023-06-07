<?php get_header(); ?>

	<section class="blog">
		<div class="container blog__container">
			<h1 class="blog__title">Blog</h1>
			<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
			<div class="blog__content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<a href="<?php the_permalink(); ?>">
						<div class="blog__items">
							<img class="blog__img" src="<?php the_post_thumbnail_url();?>" alt="">
							<h2 class="blog__subtitle"><?php the_title(); ?></h2>
							<p class="blog__text"><?php the_field('subtitle__blog');?></p>
						</div>
				</a>
          <?php endwhile; ?>
        <?php endif; ?>
			</div>
	</div>   
		</div>
		<style>
			.blog__items:hover{
				transform: scale(1.06);
				transition: all .5s ease-in-out;
			}
			.breadcrumbs__current{
				font-size: 26px;
			}
			.blog__title {
				margin-bottom: 10px;
			}
			.breadcrumbs{
				margin-bottom: 20px;
			}
			.breadcrumbs__link{
				font-size: 26px;
			}
			.breadcrumbs__separator{
				font-size: 24px;
			}
		</style>
	</section>

<?php get_footer(); ?>

