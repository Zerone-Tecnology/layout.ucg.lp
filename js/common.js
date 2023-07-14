$(function() {

	const tabs = document.querySelectorAll('[data-tab-target]')
	const tabContents = document.querySelectorAll('[data-tab-content]')

	tabs.forEach(tab => {
		tab.addEventListener('click', () => {
			const target = document.querySelector(tab.dataset.tabTarget)
			tabContents.forEach(tabContent => {
				tabContent.classList.remove('active')
			})
			tabs.forEach(tab => {
				tab.classList.remove('active')
			})
			tab.classList.add('active')
			target.classList.add('active')
		})
	})

	const tabs2 = document.querySelectorAll('[data-tab-target2]')
	const tabContents2 = document.querySelectorAll('[data-tab-content2]')

	tabs2.forEach(tab2 => {
		tab2.addEventListener('click', () => {
			const target = document.querySelector(tab2.dataset.tabTarget2)
			tabContents2.forEach(tabContent2 => {
				tabContent2.classList.remove('active')
			})
			tabs2.forEach(tab2 => {
				tab2.classList.remove('active')
			})
			tab2.classList.add('active')
			target.classList.add('active')
		})
	})

	$('#menuToggleChkd').change(function(){
		if ($(this).is(':checked')) {
			$('nav').addClass('show');
		} else {
			$('nav').removeClass('show');
		}
	})
	$("nav ul a").click(function(){
		$('nav').removeClass('show');
		$('#menuToggleChkd').prop('checked', false); 
	})
	

	$("nav ul a").mPageScroll2id();
	
	if ($(window).width() > 1200) {
    $('.partners-items').addClass("owl-carousel");

		$('.partners-items').owlCarousel({
			items: 4,
			autoplay: true,
			autoplayTimeout: 3000,
			loop: true,
			dots: false,
			nav: true,
			navText: ["<img src='./img/icon-arr-big.png'>","<img src='./img/icon-arr-big.png'>"],
			responsive: {
				0:{
					items: 2,
					nav: false,
				},
				992:{
					items: 3,
					nav: false,
				},
				1280:{
					items: 4
				}			
			}
		});
	};

	if ($(window).width() < 770) {
		$('.advantages-items').addClass("owl-carousel");

		$('.advantages-items').owlCarousel({
			items: 1,
			loop: true,
			dots: false,
			responsive: {
				0:{
					stagePadding: 50,
				},
				480:{
					stagePadding: 10,
				}	
			}
		});
	}

	//timer
	var timerDiv = $('.timer').length;
	if(timerDiv != 0){
		var countDownDate = new Date("Sep 18, 2023 09:00:00").getTime();

		var x = setInterval(function() {

			// Get today's date and time
			var now = new Date().getTime();
		
			// Find the distance between now and the count down date
			var distance = countDownDate - now;
		
			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		
			// Display the result in the element with id="demo"
			document.getElementById("tday").innerHTML = days;
			document.getElementById("thours").innerHTML = hours;
			document.getElementById("tminutes").innerHTML = minutes;
			document.getElementById("tseconds").innerHTML = seconds;
		
			// If the count down is finished, write some text
			if (distance < 0) {
				clearInterval(x);
				document.getElementById("timer").innerHTML = "EXPIRED";
			}
		}, 1000);
	}

	$('.gallery-items-first').addClass("owl-carousel");
	$('.gallery-items-second').addClass("owl-carousel");

	$('.gallery-items-first').owlCarousel({
		items: 5,
		autoplayTimeout: 1000,
		loop: true,
		stagePadding: 100,
		responsive: {
			0:{
				items: 3
			},
			1280:{
				items: 4
			}		
		},
		autoplay: true,
		rtl: true,
		dots: false
	});

	$('.gallery-items-second').owlCarousel({
		items: 5,
		autoplayTimeout: 1000,
		loop: true,
		stagePadding: 100,
		responsive: {
			0:{
				items: 3
			},
			1280:{
				items: 4
			}		
		},
		autoplay: true,
		rtl: false,
		dots: false
	});

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });
	
});

$(window).load(function() {

	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");

});
