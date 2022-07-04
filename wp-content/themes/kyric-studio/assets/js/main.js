/* ---------------------------------------------
	  Panel Menu 側邊選單
   --------------------------------------------- */

$(window).on("load", function () {
	$(".menu-btn, .popup-overlay, .popup-menu .popup-panel li a").on("click", function () {
		$(".menu-btn, .popup-overlay, .popup-menu .popup-panel, body").toggleClass("active");

		if ($(".popup-overlay").hasClass("active")) {
			$(".popup-overlay").fadeIn();
		} else {
			$(".popup-overlay").fadeOut();
		}
	});
});

// $(window).on("load resize", function () {
//   var menuHeightOffset = $(".panel").find("ul").height() / 2;

//   $(".panel").find("ul").css({
//     "margin-top": -menuHeightOffset,
//   });
// });


/* -------------------------------------------------------
	1.  Get scroll up btn 

	2.  when user scroll down 100 from the top of the document,
	shows the button 滑動觸發
	
	3.  scroll to the top of the button, when the user clicks on the button
---------------------------------------------------------- */

// 1.
const myButton = document.getElementById('toTop-btn');

// 2.
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
	if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
		myButton.classList.add("fadeIn");
		myButton.classList.remove("fadeOut");
	}

	else {
		myButton.classList.remove("fadeIn");
		myButton.classList.add("fadeOut");
	}
}

// 3.
myButton.addEventListener('click', () => {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
})

/* ---------------------------------------------
  wow.js : on scroll animation
--------------------------------------------- */
