'use strict';

document.addEventListener("DOMContentLoaded", function() {

	//----------------------HAMBURGER-----------------------
		const hamburger = (hamburgerButton, hamburgerNav, hamburgerHeader) => {
			const button = document.querySelector(hamburgerButton),
						nav = document.querySelector(hamburgerNav),
						header = document.querySelector(hamburgerHeader);
	
			button.addEventListener('click', (e) => {
				button.classList.toggle('hamburger--active');
				nav.classList.toggle('header__nav--active');
				header.classList.toggle('header--menu');
			});
		};
		hamburger('.hamburger', '.header__nav', '.header');
	
	const mySwiper = new Swiper('.respons-swiper', {
		slidesPerView: 3,
		spaceBetween: 125,
		loop: true,
		speed: 1000,
		autoplay: {
			delay: 3500,
		},
		breakpoints: {
			767: {
				slidesPerView: 3,
				spaceBetween: 125,
				autoplay: {
					delay: 2500,
				},
			},
			315: {
				slidesPerView: 1,
				spaceBetween: 40,
				autoplay: {
					delay: 2500,
				},
			},
		}
	});
	
	const elements = document.querySelectorAll(".benefits__number");
	
		// Ітеруємо крізь кожен масив елементів та нумеруємо їх
		for (let i = 0; i < elements.length; i++) {
			elements[i].setAttribute("data-count", i + 1);
			console.log(elements.length)
		}

		// Встановлюємо лічильник для кожного елементу
		const counters = document.querySelectorAll("[data-count]");
	for (let i = 0; i < counters.length; i++) {
		counters[i].style.counterReset = "count " + counters[i].getAttribute("data-count");
		console.log(counters.length)
	}
});

//------------------------------ACCORDIONS---------------------------
const accordions = (accordionSelector) => {
	const	accordion = document.querySelectorAll(accordionSelector);

	accordion.forEach(item => {
		const accordionClick = item.querySelector('.faq__accordion--header'),
					accordionContent = item.querySelector('.faq__accordion--content');

		accordionClick.addEventListener('click', (e) => {
			if(!item.classList.contains('accordion--active')) {

				item.classList.add('accordion--active')
				accordionContent.style.height = "auto"
				var height = accordionContent.clientHeight + "px"
				accordionContent.style.height = "0px"

				setTimeout(() => {
					accordionContent.style.height = height
				}, 0)

				} else {
					accordionContent.style.height = "0px"
						item.classList.remove('accordion--active')
			}

		});
	});

};
accordions('.faq__accordion');

const headerAccordions = (accordionSelector) => {
	const	accordion = document.querySelectorAll(accordionSelector);

	accordion.forEach(item => {
		const accordionClick = item.querySelector('.header__accordion--header'),
					accordionContent = item.querySelector('.header__accordion--content');

		accordionClick.addEventListener('click', (e) => {
			if(!item.classList.contains('accordion--active')) {

				item.classList.add('accordion--active')
				accordionContent.style.height = "auto"
				var height = accordionContent.clientHeight + "px"
				accordionContent.style.height = "0px"

				setTimeout(() => {
					accordionContent.style.height = height
				}, 0)

				} else {
					accordionContent.style.height = "0px"
						item.classList.remove('accordion--active')
			}
		});
	});

};
headerAccordions('.header__accordion');

const elements = document.querySelectorAll(".faq__number");
	
		// Ітеруємо крізь кожен масив елементів та нумеруємо їх
		for (let i = 0; i < elements.length; i++) {
			elements[i].setAttribute("data-count", i + 1);
			console.log(elements.length)
		}

		// Встановлюємо лічильник для кожного елементу
		const counters = document.querySelectorAll("[data-count]");
	for (let i = 0; i < counters.length; i++) {
		counters[i].style.counterReset = "count " + counters[i].getAttribute("data-count");
		console.log(counters.length)
	}

	const numbers = document.querySelectorAll(".industrial__number");
	
		// Ітеруємо крізь кожен масив елементів та нумеруємо їх
		for (let i = 0; i < numbers.length; i++) {
			numbers[i].setAttribute("data-count", i + 1);
			console.log(numbers.length)
		}

		// Встановлюємо лічильник для кожного елементу
		const counter = document.querySelectorAll("[data-count]");
	for (let i = 0; i < counter.length; i++) {
		counter[i].style.counterReset = "count " + counter[i].getAttribute("data-count");
		console.log(counter.length)
	}

//Contacts Form
const form = document.getElementById('contacts__form')
const nameInput = document.getElementById('name')
const emailInput = document.getElementById('email')

form.addEventListener('submit', (event) => {
  // prevent form submission
  event.preventDefault()

  // validate name input
  if (!nameInput.value ) {
    nameInput.classList.add('is-invalid')
  } else {
    nameInput.classList.remove('is-invalid')
  }

  // validate email input
  if (!emailInput.value) {
    emailInput.classList.add('is-invalid')
  } else if (!isValidEmail(emailInput.value)) {
    emailInput.classList.add('is-invalid')
  } else {
    emailInput.classList.remove('is-invalid')
  }

  // if form is valid, submit it
  if (form.checkValidity()) {
    form.submit()
  }
})

function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
  return emailRegex.test(email)
}



const Inputname = document.getElementById('modal__name');
const phoneInput = document.getElementById('modal__phone');

function validateName() {
  if (Inputname.value.length < 2) {
    Inputname.setCustomValidity("Ім'я повинно містити принаймні 2 букви");
  } else {
    Inputname.setCustomValidity("");
  }
}

function validatePhone() {
  if (phoneInput.value.length !== 10) {
    phoneInput.setCustomValidity("Телефон повинен містити 10 цифр");
  } else {
    phoneInput.setCustomValidity("");
  }
}

Inputname.addEventListener("input", validateName);
phoneInput.addEventListener("input", validatePhone);








