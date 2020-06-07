


  <section id="pageContent">
<article>
    <h1>Bienvenue sur le site LC Prépa</h1>

  
  

  <div class="content">
   

<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img class="slideimg" src="./img/1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img class="slideimg" src="./img/2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img class="slideimg" src="./img/3.jpg" style="width:100%">
  <div class="text"></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
</script>


  </div>


      <article class="intro">


        <p>
        Notre site internet est basée sur le tuning et la préparation de voiture “homologué sur route ” à bas coûts.
        À la réunion ,le tuning est beaucoup présent mais reste un milieu assez fermé.
        Notre but est rendre le tuning accessible pour tous le monde avec des prix attractive mais en  respectant l'environnement dû au voiture qui dégage beaucoup de nox ”fumée noir” et limiter la pousse illégal à travers une communauté de passionné.

        </p>



      </article>

</article>
<br>

<div align="center">
<h1>Partenaire officiel : Evo Corse faite vivre la sportivité</h1><br>

<video src="./video/pub.mp4" class="video" controls></video>
</div>
