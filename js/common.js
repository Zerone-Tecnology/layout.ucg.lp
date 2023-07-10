$(function() {
	
	if ($(window).width() > 1200) {
    $('.partners-items').addClass("owl-carousel");

		$('.partners-items').owlCarousel({
			items: 4,
			responsive: {
				0:{
					items: 2
				},
				1280:{
					items: 3
				}			
			}
		});
	};

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

	$('.gallery-items-first').addClass("owl-carousel");
	$('.gallery-items-second').addClass("owl-carousel");

	$('.gallery-items-first').owlCarousel({
		items: 5,
		autoplayTimeout: 1000,
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
		responsive: {
			0:{
				items: 3
			},
			1280:{
				items: 4
			}		
		},
		autoplay: true,
		dots: false
	});

	function stopCarousel() {
		var owl = $('.owl-carousel');
		owl.removeClass('owl-carousel');
	}

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

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
