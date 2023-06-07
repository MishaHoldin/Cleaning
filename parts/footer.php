	<?php
  // Получаем URL вашего сайта
  $home_url = get_home_url();
?>

<footer class="footer">
		<div class="footer__container container">
			<div class="footer__wrapper">
				<div class="footer__logo">
					<a href="<?php echo $home_url?>">
						<img class="footer__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-img.svg" alt="">
				</a>
					<div class="footer__timetable">
						<p class="footer__time">Mon - Sat: 10:00 AM – 8:00 PM</p>
						<p class="footer__time">Sun: Closed</p>
					</div>
				</div>
				<div class="footer__adress">
					<h2 class="footer__title">2225 Belmont at,<br>Hamtramck, mi 48212</h2>
					<div class="footer__contacts">
						<a class="footer__tel" href="tel:+3137440805">+313 744 0805</a>
						<a class="footer__tel" href="tel:+3137207644">+313 720 7644</a>
						<a class="footer__tel" href="mailto:vbilous@general-clean.com">vbilous@general-clean.com</a>
					</div>
				</div>
			</div>
			<div class="footer__nav">
				<ul class="footer__list">
					<ul class="footer__horisontal">
							<li class="footer__item">Cleaning Services</li>
								<li class="footer__subitem">Commercial Cleaning Services</li>
								<li class="footer__subitem">Factory Cleaning Services</li>
								<li class="footer__subitem">Meat And Poultry Production Line Cleaning</li>
								<li class="footer__subitem">Sanitation Cleaning Services</li>
								<li class="footer__subitem">Emergency Cleaning Services</li>
						</ul>
					<li class="footer__item">Locations we serve</li>
					<ul class="footer__horisontal">
							<li class="footer__item">About Us</li>
							<li class="footer__item">Who We Are</li>
							<li class="footer__item">Careers</li>
						</ul>
					<li class="footer__item">Blog</li>
					<li class="footer__item">Contact</li>
					<li class="footer__item">FAQ</li>
				</ul>
				<div class="footer__rigths">
					<p class="footer__time">© 2022 General Cleaning Sanitation. All rights reserved</p>
					<ul class="footer__sublist">
						<li class="footer__navigation">Sitemap</li>
						<li class="footer__navigation">Privacy Policy</li>
						<li class="footer__navigation">Accessibility Statement</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>