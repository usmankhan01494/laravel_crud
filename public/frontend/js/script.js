// ----------- VALIDATION FUNCTIONS ------------- //

// Name Validation (Alphabet only + Min 4)
function validateNameField(input) {
    let error = input.nextElementSibling;
    let regex = /^[A-Za-z ]+$/;

    if (!regex.test(input.value.trim())) {
        error.textContent = "Please enter only alphabets.";
        input.dataset.valid = "false";
        input.style.border = "2px solid red";
    } 
    else if (input.value.trim().length < 4) {
        error.textContent = "Name must be at least 4 characters.";
        input.dataset.valid = "false";
        input.style.border = "2px solid red";
    }
    else {
        error.textContent = "";
        input.dataset.valid = "true";
        input.style.border = "2px solid green";
    }
}

// Number Validation (Digits only + Min 10, Max 15)
function validateNumberField(input) {
    let error = input.nextElementSibling;
    let regex = /^[0-9]+$/;
    let len = input.value.trim().length;

    if (!regex.test(input.value.trim())) {
        error.textContent = "Please enter only numbers.";
        input.dataset.valid = "false";
        input.style.border = "2px solid red";
    } 
    else if (len < 10) {
        error.textContent = "Phone number must be at least 10 digits.";
        input.dataset.valid = "false";
        input.style.border = "2px solid red";
    }
    else if (len > 15) {
        error.textContent = "Phone number cannot exceed 15 digits.";
        input.dataset.valid = "false";
        input.style.border = "2px solid red";
    }
    else {
        error.textContent = "";
        input.dataset.valid = "true";
        input.style.border = "2px solid green";
    }
}

// Email Validation
function validateEmailField(input) {
    let error = input.nextElementSibling;
    let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!regex.test(input.value.trim())) {
        error.textContent = "Invalid email address.";
        input.dataset.valid = "false";
        input.style.border = "2px solid red";
    } else {
        error.textContent = "";
        input.dataset.valid = "true";
        input.style.border = "2px solid green";
    }
}

// // Service Required Validation (Not empty)
// function validateServiceField(input) {
//     let error = input.nextElementSibling;

//     if (input.value.trim() === "") {
//         error.textContent = "Please enter required service.";
//         input.dataset.valid = "false";
//         input.style.border = "2px solid red";
//     } else {
//         error.textContent = "";
//         input.dataset.valid = "true";
//         input.style.border = "2px solid green";
//     }
// }



// ----------- EVENT LISTENERS ------------- //

document.querySelectorAll('.name-input').forEach(input => {
    input.addEventListener('blur', () => validateNameField(input));
});

document.querySelectorAll('.number-input').forEach(input => {
    input.addEventListener('blur', () => validateNumberField(input));
});

document.querySelectorAll('.email-input').forEach(input => {
    input.addEventListener('blur', () => validateEmailField(input));
});

// document.querySelectorAll('.service-input').forEach(input => {
//     input.addEventListener('blur', () => validateServiceField(input));
// });


// ----------- BLOCK FORM SUBMISSION ------------- //

document.querySelectorAll(".validate-form").forEach(form => {
    form.addEventListener("submit", function(e) {

        let allValid = true;

        form.querySelectorAll(
            ".name-input, .email-input, .number-input"
        ).forEach(input => {
            if (input.dataset.valid !== "true") {
                allValid = false;
                input.style.border = "2px solid red";
            }
        });

        if (!allValid) {
            e.preventDefault();
            alert("Please fill all fields correctly.");
        } else {

            e.preventDefault();
            alert("Form submitted successfully!");

            form.reset();

            form.querySelectorAll("input").forEach(i => {
                i.style.border = "1px solid #ccc";
                i.dataset.valid = "";
            });
        }
    });
});




//

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}


// 


    $(document).ready(function(){$('#slide, #slide1').click(function(){var hidden=$('.sidewarper');if(hidden.hasClass('visible')){hidden.animate({"right":"-410px"},"slow").removeClass('visible');}else{hidden.animate({"right":"0px"},"slow").addClass('visible');}});});

    // mobile acordian

    $(document).ready(function($){$('.accordion').find('.accordion-toggle').click(function(){$(this).next().slideToggle('fast');$(".accordion-content").not($(this).next()).slideUp('fast');});});



    // wow crousual

    
jQuery(document).ready(function($) {

						'use strict';

						var carousel67 = $("#carousel67");

						try{

					 carousel67.owlCarousel({

								responsiveClass:true,

								responsive : {

										0 : {items : 1},

										480 : {items : 2},

										768 : {items : 3},

										1024 : {items : 3},

										1366 : {items : 4}

								},

								loop: true,

				nav:false,

				autoplay:true,        

								center: false,

								margin: 0,

								dots  : false,

							 autoplaySpeed:1150,autoplayTimeout: 1200,rewindSpeed  : 1200,});}catch(err){}

				});

	//project Carousel Slider


	if ($('.truch-carousel').length) {

		$('.truch-carousel').owlCarousel({

			loop:true,

			margin:0,

			nav:false,

				dots  : true,

			autoplayHoverPause:true,

			autoplay: true,

			smartSpeed: 1700,

			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],

			responsive:{

				0:{

					items:1

				},

				600:{

					items:1

				},

				800:{

					items:1

				},

				1024:{

					items:1

				},

				1200:{

					items:1

				}

			}

		});       

	}


	//project Carousel Slider


	if ($('.truchh-carousel').length) {

		$('.truchh-carousel').owlCarousel({

			loop:true,

			margin:0,

			nav:false,

				dots  : true,

			autoplayHoverPause:true,

			autoplay: true,

			smartSpeed: 1700,

			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],

			responsive:{

				0:{

					items:1

				},

				600:{

					items:1

				},

				800:{

					items:1

				},

				1024:{

					items:2

				},

				1200:{

					items:2

				}

			}

		});       

	}
