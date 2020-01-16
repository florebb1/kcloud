// Kcloud script.js for laidback


// mobile header menu //
const nav = document.querySelector('#mobile-nav');
const menu = document.querySelector('#mobile-menu');
const menuToggle = document.querySelector('.nav__toggle');
let isMenuOpen = false;


// TOGGLE MENU ACTIVE STATE
menuToggle.addEventListener('click', function(e){
  e.preventDefault();
  isMenuOpen = !isMenuOpen;
  
  // toggle a11y attributes and active class
  menuToggle.setAttribute('aria-expanded', String(isMenuOpen));
  menu.hidden = !isMenuOpen;
  nav.classList.toggle('nav--open');
});


// TRAP TAB INSIDE NAV WHEN OPEN
nav.addEventListener('keydown', function(e){
  // abort if menu isn't open or modifier keys are pressed
  if (!isMenuOpen || e.ctrlKey || e.metaKey || e.altKey) {
    return;
  }
  
  // listen for tab press and move focus
  // if we're on either end of the navigation
  const menuLinks = menu.querySelectorAll('.nav__link');
  if (e.keyCode === 9) {
    if (e.shiftKey) {
      if (document.activeElement === menuLinks[0]) {
        menuToggle.focus();
        e.preventDefault();
      }
    } else if (document.activeElement === menuToggle) {
      menuLinks[0].focus();
      e.preventDefault();
    }
  }
});

// 첨부파일 라벨링 적용
$(document).on('change', '.custom-file-input', function (event) {
    $(this).next('.custom-file-label').html(event.target.files[0].name);
});

// main 품질성능 검증 기준 auto carousel //
$('.carousel-main').owlCarousel({
	items: 4,
	loop: true,
	autoplay: true,
	autoplayTimeout: 1500,
	margin: 10,
	dots: false,
	navText: ['<i class="pe-7s-angle-left"></i>','<i class="pe-7s-angle-right"></i>'],
	responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    },
})


/* ### Main Top Nav fixed Animation  ### */
$(window).on("scroll", function() {
    if($(window).scrollTop() > 0) {
        $(".header-wrapper").addClass("active");
    } else {
        $(".header-wrapper").removeClass("active");
    }
});

// login, signUp page move before page url save
var segment = $(location).attr('pathname')+""+$(location).attr('search');
$("#logIn").attr('href','/member/login?url='+segment);

// get url parameter
var getParameter = function (param) { var returnValue; var url = location.href; var parameters = (url.slice(url.indexOf('?') + 1, url.length)).split('&'); for (var i = 0; i < parameters.length; i++) { var varName = parameters[i].split('=')[0]; if (varName.toUpperCase() == param.toUpperCase()) { returnValue = parameters[i].split('=')[1]; return decodeURIComponent(returnValue); } } };

// url tab move
$(function () {
	var hash = location.hash;
	if(hash != "" && hash == "#home") {
		$("#home-tab").click();
	}else if(hash == "#profile") {
		$("#profile-tab").click();
	}else if(hash == "#contact") {
		$("#contact-tab").click();
	}
	// popover
	$('[data-toggle="popover"]').popover();

	// logout
    $("#logoutBtn").click(function () {
        $.ajax({
            url: '/api/logout',
            type: 'POST',
            dataType: 'JSON',
            success: function (response) {
                if(response.result == true) {
                    location.reload();
                }
            }
        });
    });
})

//Cookie
function getCookie(c_name) {
    var i,x,y,ARRcookies=document.cookie.split(";");
    for (i=0;i<ARRcookies.length;i++) {
        x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
        y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
        x=x.replace(/^\s+|\s+$/g,"");
        if (x==c_name) {
            return unescape(y);
        }
    }
}

function setCookie(c_name,value,exdays) {
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
}