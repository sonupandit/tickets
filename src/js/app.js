
// init Videos on Support page
const players = Plyr.setup('.js-player',{
  controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume','fullscreen']
});
var medias = Array.prototype.slice.apply(document.querySelectorAll('audio,video'));
medias.forEach(function(media) {
  media.addEventListener('play', function(event) {
    medias.forEach(function(media) {
      if(event.target != media) media.pause();
    });
  });
});

// Excerpt Content script
$(document).on("click", ".event-text .read-more", function(e){
  e.preventDefault();   
  
  if(!$(this).hasClass("readless")){
    $(".excerpt-content").hide();
    $(".full-content").show();
    $(this).text("Read less");
  } else{
    $(".full-content").hide();
    $(".excerpt-content").show();   
    $(this).text("Read more");
  }
  $(this).toggleClass("readless");
});




//Price table scripts membership page
$(document).on("click",".pt-card .btn-buy", function(e){
  e.preventDefault();
  var $this = $(this);
  var $card =  $this.parents(".pt-card");
  $card.addClass("active-card");

  $card.parents(".price-table").find(".pt-card").not(".active-card").fadeTo(300, 0.3).css({"pointer-events":"none","user-select":"none"});


  $card.find(".pt-content,.card-footer").hide();
  $card.find(".pt-action").stop().fadeIn(500); 
});


$(document).on("click",".pt-card .close-btn", function(e){
  e.preventDefault();
  var $this = $(this);
  var $card =  $this.parent(".pt-card");
  $card.removeClass("active-card");

  $card.parents(".price-table").find(".pt-card").not($card).fadeTo(300, 1).attr("style","");

  $card.find(".pt-action").stop().hide(); 
  $card.find(".pt-content,.card-footer").fadeIn(500);   
});


//Seat category selection scripts Tickets detail page
$(document).on("click",".ticket-category .seat-select-btn", function(e){
  e.preventDefault();
  var $this = $(this);
  var $tcRow =  $this.parents(".ticket-category");
  $tcRow.addClass("active-tc");

  $tcRow.find(".tc-details").stop().hide();
  $tcRow.siblings().find(".tc-details").hide();
  $tcRow.find(".tc-proceed").stop().fadeIn(500);
});

$(document).on("click",".ticket-category .close-btn", function(e){
  e.preventDefault();
  var $this = $(this);
  var $tcRow =  $this.parent(".ticket-category");
  $tcRow.removeClass("active-tc");

  $tcRow.find(".tc-proceed").stop().hide();
  $tcRow.find(".tc-details").stop().fadeIn(500);
  $tcRow.siblings().find(".tc-details").fadeIn(500);
 
});


// Scroll to Section Script
$(document).on("click", "[data-scrollto]", function(e) {
    e.preventDefault();   
    var scrollToElm = $(this).data("scrollto");
    var scrollPos = $('[data-scroll-id="'+scrollToElm+'"]').offset().top;
    $("html,body").stop().animate({ scrollTop: scrollPos }, 700);    
});



// Home Page Ticket listing aninmation
gsap.registerPlugin(ScrollTrigger);
gsap.fromTo(".ticket-listing > .row",{autoAlpha: 0, y: 80}, {delay: 0.5,duration: 0.7, stagger:0.2, autoAlpha: 1, y:0,ease: "power4.out"})
// Fade Animation
$(".animTop").each(function(){
  gsap.fromTo($(this), {
    autoAlpha: 0
  },{
    scrollTrigger: {
      trigger: $(this),
      start: "top 90%",
    },
    duration: 1.5,   
    autoAlpha: 1
  });
});


// Sign In Script
$(document).on("click", ".back-form-btn", function(){
  $(".email-signin-block,.password-forgot-block,.email-register-block,.back-form-btn").hide();
  $(".signin-block").show();
});
$(document).on("click", ".email-register-show", function(e){
  e.preventDefault();
  $(".signin-block").hide();
  $(".email-register-block,.back-form-btn").show();
});

$(document).on("click", ".email-login a", function(e){
  e.preventDefault();
  $(".signin-block").hide();
  $(".email-signin-block,.back-form-btn").show();
});

$(document).on("click", ".forgot-btn", function(e){
  e.preventDefault();
  $(".email-signin-block").hide();
  $(".password-forgot-block,.back-form-btn").show();
});

$(document).on('afterClose.fb', function( e, instance, slide ) {
 $(".back-form-btn").trigger("click");
});



// Toggle Mobile Menu
$(".hamburger").on("click",function(event) {
  $(this).toggleClass("h-active");
  $("html").toggleClass("menu-active");
});

$(document).on("keyup", function(e) {
    if (e.keyCode === 27) {
        $(".nav-active .hm").trigger("click");
    }
});

$(document).on("click", ".main-nav .nav>li a", function(){
  $(".nav-active .hm").trigger("click");
});

$(window).on("resize", function(){
  if($(window).width() > 1199){
    $(".menu-active .hamburger").trigger("click");
  }
});



