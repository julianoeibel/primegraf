$('.subMenuButtom').hover(function() {
    $(this).children(".subMenu").css({"opacity":"1"});
    $(this).children(".subMenu").css({"display":"block"});
    $(this).children("a").css({"color":"white"})
    $(this).children("#lojaVirtualBtn").css({"color":"white"})
}, function() {
    $(this).children(".subMenu").css({"opacity":"0"});
    $(this).children(".subMenu").css({"display":"none"});
    $(this).children("a").css({"color":"#2E4465"})
    $(this).children("#lojaVirtualBtn").css({"color":"#EC268F"})
});

$(".subMenuGrafBtn").hover(function(){
    $(this).children(".subMenuGrafica").css({"opacity":"1"});
    $(this).children(".subMenuGrafica").css({"display":"block"});
}, function(){
    $(this).children(".subMenuGrafica").css({"opacity":"0"});
    $(this).children(".subMenuGrafica").css({"display":"none"});
});

$(window).ready(function() {
    $('.flexslider').flexslider();
    touch: true;    
});

$(".hamburguerWrapper").click( function() {
    $(this).toggleClass('wrapperX');
    $(".icon").toggleClass("close");
    $('nav').toggleClass("open");
});

function getImgWidth() {
    var Imgwidth = $(".section5 img").width();
    const newLocal = Imgwidth;
    $(".section5 section").css({"width":newLocal});
}

getImgWidth();


var stickyNavTop = $('header').position().top;
var stickyNav = function(){
    var scrollTop = $(window).scrollTop();
    var windowWidth = $(window).width();
    if (scrollTop > stickyNavTop && windowWidth > 1024 && scrollTop > 50) {
        $('header').addClass('schrink');
        $('.logo').addClass('schrink');
        $(".subMenuButtom").css({"line-height":"50px"});
        $(".logo").css({"width":"15%"});
        $(".subMenu").css({"top":"50px"});
        $('header').addClass('sticky');
        $(".header_placeholder").addClass('placeholder')
    } else if(windowWidth <= 1024 ) {
        $(".subMenu").css({"top":"0"});
        $('header').addClass('sticky');
        $(".header_placeholder").addClass('placeholder')
    } else {
        $(".header_placeholder").removeClass('placeholder');
        $('header').removeClass('schrink');
        $('.logo').removeClass('schrink');
        $(".subMenuButtom").css({"line-height":"80px"});
        $(".subMenu").css({"top":"80px"});
        $('header').removeClass('sticky');
        $(".logo").css({"width":"20%"});    
    }
};

$(window).scroll(function() {
    stickyNav();
});



$(window).scroll(function() {
    if($(window).scrollTop() > 200) {
        $(".contactForm").css({"left":"50%"});
    } else {
        $(".contactForm").css({"left":"-200%"});
    }
});

$('#whats').click(function() {
    $(".whatsLink").css({"right":"30px"});
    $('#whats').css({"right":"-400px"});
});

$(".whatsLink").click(function() {
    $("#whats").css({"right":"30px"});
    $(".whatsLink").css({"right":"-400px"});
});



/* -------------------------------------Funcão do DropZone em Currículos----------------------------------*/




/* -------------------------------------FECHAMENTO FORMULÁRIO HOME----------------------------------*/
$("#contato").click(function() {
    $(".contactForm").css({"left":"50%"});
});
$(".closeBtn").click(function() {
    $(".contactForm").css({"left":"-200%"});
});

/* -------------------------------------SCROLL AUTOMÁTICO CLICK ID's----------------------------------*/

$('#mainNav a[href^="#"]').on('click', function(e) {
    $('.hamburguerWrapper').removeClass('wrapperX');
    $(".icon").removeClass("close");
    $('nav').removeClass("open");
    e.preventDefault();
    var id = $(this).attr('href'),
            targetOffset = $(id).offset().top;

    $('html, body').animate({ 
        scrollTop: targetOffset - 100
    }, 500);
    
});

/* -------------------------------------EXIT INTENT POP-UP----------------------------------*/

function apearPopup(){
    $(".lightbox").addClass("activeLightbox");
    $(".popUp").addClass("activePopup");

};
function removePopup(){
    $(".lightbox").removeClass("activeLightbox");
    $(".popUp").removeClass("activePopup");
};

$("#popUpCloseBtn").click(function(){
    removePopup();
    cont++;
    console.log(cont);
});

var cont = 0;
var showed = false;

/*POP-UP APARECE QUANDO O MOUSE DEIXA A TELA*/

function mouseLeave() {
    $('html').mouseleave(function(){
        if( cont < 1 ) {
            apearPopup();
            cont++;
        } 
    });
};


setTimeout(() => {
    mouseLeave();
}, 20000);


/*POP-UP APARECE QUANDO A TELA É ROLADA MAIS DE 500px E SE 
O PARÂMETRO ANTERIOR NÃO FOI EXECUTADO*/

$(window).scroll(function(){
    if($(window).scrollTop() > 500 && cont < 1 ) {
        cont++;
        setTimeout(() => {
            apearPopup();
        }, 20000);
    }
});



/*-------------------------------FUNÇÃO GET YEAR FOOTER-------------------------------*/


function getYearFooter() {
   var dt = new Date();
   var currentYear = dt.getFullYear();
   $('#currentYear').html(currentYear);
};

getYearFooter();