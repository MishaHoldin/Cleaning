<?php
/*
Template Name: contacts
*/
  ?>
	<?php get_header();?>

	<section class="contacts">
		<div class="contacts__container container">
			<div class="contacts__content">
				<h2 class="contacts__title">Contacts</h2>
				<p class="contacts__subtitle">Send a Message</p>
				<form id="contacts__form">
					<div class="contacts__wrapper">
						<div class="contacts__form-group">
							<label class="contacts__name" for="name" >Name <span class="contacts__star">*</span></label>
							<input class="contacts__placeholder" type="text" id="name" name="name" placeholder="Name" required>
						</div>
						<div class="contacts__form-group">
							<label class="contacts__name" for="email">Email <span class="contacts__star">*</span></label>
							<input class="contacts__placeholder" type="email" id="email" name="email" placeholder="Email" required>
						</div>
					</div>
					<div class="contacts__form-group">
						<label class="contacts__name" for="message">Message <span class="contacts__star">*</span></label>
						<textarea class="contacts__placeholder" type="text" id="message" name="message" placeholder="Message" required></textarea>
					</div>
					<button class="contacts__btn btn" type="submit">Submit</button>
				</form>
			</div>
			<p class="contacts__vl"></p>
			<div class="contacts__items">
				<div class="contacts__item">
					<h2 class="contacts__contact--group-title">Call Us</h2>
					<img src="./img/phone.svg" alt=""> <a href="tel:+3137440805">313 744 0805</a> <span class="contacts__slash">/</span> <a href="tel:+3137207644">313 720 7644</a>
				</div>
				<div class="contacts__item">
					<h2 class="contacts__contact--group-title">Email Us</h2>
					<img src="./img/mail.svg" alt=""> <a href="mailto:vbilous@general-clean.com">vbilous@general-clean.com</a> <span class="contacts__slash">/</span> <a href="mailto:info@general-clean.com">info@general-clean.com</a>
				</div>
				<div class="contacts__item">
					<h2 class="contacts__contact--group-title">Visit Us</h2>
					<img src="./img/location.svg" alt=""> <a href="https://www.google.com/maps/place/2225+Belmont+St,+Hamtramck,+MI+48212,+%D0%A1%D0%A8%D0%90/data=!4m2!3m1!1s0x8824d26b83155f93:0xf38d274ce028bec9?sa=X&ved=2ahUKEwj7jcDDt5X-AhWimIsKHYdnAJQQ8gF6BAgWEAI">2225 Belmont at, Hamtramck, mi 48212</a>
				</div>
			</div>
		</div>
	</section>

	<section class="map">
		<div class="map__container container">
			<iframe class="map__location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2946.425422594518!2d-83.0624194!3d42.397385199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824d26b83155f93%3A0xf38d274ce028bec9!2zMjIyNSBCZWxtb250IFN0LCBIYW10cmFtY2ssIE1JIDQ4MjEyLCDQodCo0JA!5e0!3m2!1sru!2sua!4v1680800565076!5m2!1sru!2sua" width="100%"  style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>

<?php get_footer();?>
