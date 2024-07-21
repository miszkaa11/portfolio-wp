$(document).ready(function(){
   console.log('ML');

   // AOS Lib
   AOS.init();

   // Offset = Anchors + Outside Main Page
   $(".menu-item a").click(function () {
      $('.main-navigation').removeClass('toggled');
      let target = $(this.hash);
      if (target.length) {
         $('html, body').animate({
            scrollTop: target.offset().top - 280
         }, 0);
         return false;
      }
   });

   $('a[href*="#"]:not([href="#"])').click(function() {
      const target = $(this.hash);
      if (target.length) {
         $('html, body').animate({ scrollTop: target.offset().top - 280 }, 0);
         return false;
      }
   });

   $(function($) {
      let hash = window.location.hash;
      if (hash && hash !== '#' && $(hash).length) {
         $('html, body').animate({
            scrollTop: $(hash).offset().top + 180
         }, 'linear');
      }
   });

   // Scrolled Items
   function handleScroll() {
      let $window = $(this);
      let scrollHeight = $window.scrollTop();
      let $elements = $(".site-header, .site-branding img");

      $elements.toggleClass('scrolled', scrollHeight > $elements.first().height());
   }

   $(document).scroll(handleScroll);
   handleScroll();

   // Gallery Page Slider
   $(".gallery-template__image").click(function () {
      $(".gallery-template__image").removeClass("active");
      $(this).addClass("active");
   });

   // Contact Acceptance
   let $showMore1 = $(".show");
   let $accept1Cta = $(".accept");

   $showMore1.hide(0);

   $accept1Cta.click(function(e) {
      $showMore1.stop().slideToggle(300);
      $(this).toggleClass("open");
      if ($(this).hasClass("open")) {
         $(this).text("Close consent");
      } else {
         $(this).text("Show consent");
      }
      e.preventDefault();
   });
});

// JS

// Sticky
document.addEventListener("DOMContentLoaded", function () {
   const infoButton = document.getElementById("stickyButton");
   const stickyHeader = document.querySelector(".sticky__header");
   const originalText = stickyHeader.innerText;

   infoButton.addEventListener("click", function () {
      infoButton.classList.toggle("clicked");

      if (stickyHeader.innerText === originalText) {
         stickyHeader.innerText = "CLOSE";
      } else {
         stickyHeader.innerText = originalText;
      }
   });

   window.addEventListener("scroll", function () {
      if (window.scrollY > 100) {
         infoButton.style.display = "block";
      } else {
         infoButton.style.display = "none";
      }
   });
});

// JavaScript dołączany w pliku lub bezpośrednio w skrypcie
document.addEventListener('DOMContentLoaded', function() {
   const image = document.querySelector('.info__image');

   image.addEventListener('click', function() {
      this.classList.toggle('show-additional-text');
   });
});

document.addEventListener("DOMContentLoaded", function() {
   const scrollToTopBtn = document.getElementById("to-top");

   window.onscroll = function() {
      scrollFunction();
   };

   function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
         scrollToTopBtn.style.display = "flex";
         scrollToTopBtn.style.justifyContent = "center";
         scrollToTopBtn.style.alignItems = "center";

         const footer = document.getElementById("footer");
         const footerPosition = footer.getBoundingClientRect().top;
         if (footerPosition < window.innerHeight && footerPosition > 0) {
            scrollToTopBtn.style.backgroundColor = "#21252B";
         } else {
            scrollToTopBtn.style.backgroundColor = "";
         }
      } else {
         scrollToTopBtn.style.display = "none";
      }
   }

   scrollToTopBtn.addEventListener("click", function() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
   });
});



