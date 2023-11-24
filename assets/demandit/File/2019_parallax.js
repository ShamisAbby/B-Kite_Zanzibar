   //define controller
	var controller = new ScrollMagic.Controller();

   startParallax = function(parallaxelement){
	new ScrollMagic.Scene({
			triggerElement: parallaxelement,
			triggerHook: "onEnter",
		})
		.duration('200%')
		.setTween(parallaxelement, {
			backgroundPosition: "50% 100%",
			ease: Linear.easeNone
		})
		//.addIndicators() // for debugging purposes
		.addTo(controller);
}

	// Fade in 1
   fadeInElements = function(){
	var fadeInTimeline = new TimelineMax();
	var fadeInFrom = TweenMax.from(".whitebg", 1, {
		autoAlpha: 0
	});
	var fadeInTo = TweenMax.to(".whitebg", 1, {
		autoAlpha: 1
	});
	fadeInTimeline
		.add(fadeInFrom)
		.add(fadeInTo);

	new ScrollMagic.Scene({
			triggerElement: "#parallax0",
			offset: 200,
		})
		.setTween(fadeInTimeline)
		.duration(400)
		//    .reverse(false)
		//.addIndicators() // add indicators (requires plugin)
		.addTo(controller);
}

$(document).ready(function () {
   startParallax("#parallax0");
   startParallax("#parallax1");
   startParallax("#parallax2");
   startParallax("#parallax3");
   startParallax("#parallax4");
   startParallax("#parallax5");
   startParallax("#parallaxContent");

   fadeInElements();

})
