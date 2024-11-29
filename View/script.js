let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide_section");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

// BOUTTON SE CONNECTER
function openForm() {
  document.getElementById("myForm").style.display = "flex";
};

function closeForm() {
  var forms = document.querySelectorAll(".myForm");
  forms.forEach(function(form) {
      form.style.display = "none";
  });
}


// BOUTTON MDP OUBLIE
function openForm1() {
  document.getElementById("myForm1").style.display = "flex";
};

function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}

// BOUTTON S'INSCRIRE'
function openForm2() {
  document.getElementById("myForm2").style.display = "flex";
};

function closeForm2() {
  document.getElementById("myForm2").style.display = "none";
}




