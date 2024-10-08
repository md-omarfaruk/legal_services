window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    const mediaQuery = window.matchMedia(['(max-width: 767.98px)', '(max-width: 991.98px)'])
    if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
        document.getElementById("header-navbar-two").style.display = "inline-block";
        document.getElementById("header-navbar-one").style.display = "none";
        document.getElementById("header-navbar-two").style.position = "fixed";
        document.getElementById("header-navbar-two").style.top = "0px";
        document.getElementById("header-navbar-two").style.left = "0px";
        document.getElementById("header-navbar-two").style.zIndex = "1";
        if (mediaQuery.matches) {
            document.getElementById("header-navbar-two").style.display = "none";
        }

    } else {
        document.getElementById("header-navbar-two").style.display = "none";
        document.getElementById("header-navbar-one").style.display = "inline-block";
        document.getElementById("header-navbar-one").style.width = "100%";
    }
}
// ---------------------Search-Scripts------------------------
document.addEventListener("DOMContentLoaded", function() {
  var searchIcon = document.getElementById('searchBar');
  var searchForm = document.getElementById('searchForm'); // Make sure the ID matches the actual output of get_search_form()
  
  // Initially hide the search form
  searchForm.style.display = 'none';
  
  // Toggle visibility of the search form on icon click
  searchIcon.addEventListener('click', function() {
      if (searchForm.style.display === 'none') {
          searchForm.style.display = 'block';
      } else {
          searchForm.style.display = 'none';
      }
  });
});


// --------------------Gallery-Lightbox-Script-Start--------------------------------

// query selectors
const lightboxEnabled = document.querySelectorAll('.lightbox-enabled');
const lightboxArray = Array.from(lightboxEnabled);
const lastImage = lightboxArray.length-1;
const lightboxContainer = document.querySelector('.lightbox-container');
const lightboxImage = document.querySelector('.lightbox-image');
const lightboxBtns = document.querySelectorAll('.lightbox-btn');
const lightboxBtnRight = document.querySelector('#right');
const lightboxBtnLeft = document.querySelector('#left');
const close = document.querySelector('#close');
let activeImage;
// Functions
const showLightBox = () => {lightboxContainer.classList.add('active')};

const hideLightBox = () => {lightboxContainer.classList.remove('active')};

const setActiveImage = (image) => {
lightboxImage.src = image.dataset.imgsrc;
activeImage= lightboxArray.indexOf(image);
};

const transitionSlidesLeft = () => {
  lightboxBtnLeft.focus();
  $('.lightbox-image').addClass('slideright'); 
   setTimeout(function() {
  activeImage === 0 ? setActiveImage(lightboxArray[lastImage]) : setActiveImage(lightboxArray[activeImage-1]);
}, 250); 


  setTimeout(function() {
    $('.lightbox-image').removeClass('slideright');
}, 500);   
};

const transitionSlidesRight = () => {
 lightboxBtnRight.focus();
$('.lightbox-image').addClass('slideleft');  
  setTimeout(function() {
   activeImage === lastImage ? setActiveImage(lightboxArray[0]) : setActiveImage(lightboxArray[activeImage+1]);
}, 250); 
  setTimeout(function() {
    $('.lightbox-image').removeClass('slideleft');
}, 500);  
};

const transitionSlideHandler = (moveItem) => {
  moveItem.includes('left') ? transitionSlidesLeft() : transitionSlidesRight();
};

// Event Listeners
lightboxEnabled.forEach(image => {
   image.addEventListener('click', (e) => {
    showLightBox();
    setActiveImage(image);
    })                     
    });
lightboxContainer.addEventListener('click', () => {hideLightBox()});
close.addEventListener('click', () => {hideLightBox()});
lightboxBtns.forEach(btn => {
btn.addEventListener('click', (e) => {
e.stopPropagation();
  transitionSlideHandler(e.currentTarget.id);
})
});

lightboxImage.addEventListener('click', (e) => {
e.stopPropagation();

});
document.onkeydown = function(e) {
  if (e.key === "ArrowRight") {
      transitionSlidesRight();
  } else if (e.key === "ArrowLeft") {
      transitionSlidesLeft();
  }
};

// --------------------Gallery-Lightbox-Script-End--------------------------------



