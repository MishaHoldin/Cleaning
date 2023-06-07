	<?php
  // Получаем URL вашего сайта
  $home_url = get_home_url();
?>
	
	<header class="header">
		<div class="header__container container">
			<a href="<?php echo $home_url?>" class="header__logo">
				<img src="<?php echo  get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
			</a>
			<div class="header__accordion">
				<div class="header__accordion--content">
						<div class="accordion__header">
							<?php 
							wp_nav_menu( array(
								'menu'=>'menu',
								'menu_class'=>'header__nav',
									'theme_location'=>'menu',
								) );
							?>
						</div>
				</div>
			</div>
			<button class="hamburger" type="button">
				<span class="hamburger__item"></span>
			</button>
		</div>
	</header>