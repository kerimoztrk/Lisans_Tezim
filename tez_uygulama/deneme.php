<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slayt Gösterisi</title>
  <style>
    /* Görünen slaytları gizlemek */
    .mySlides {
      display: none;
    }

    /* Gösterilen slaytın stili */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @keyframes fade {
      from {
        opacity: 0.4;
      }
      to {
        opacity: 1;
      }
    }

    /* Slayt resimlerinin boyutları */
    .mySlides img {
      width: 100%;
      height: 400px;
      object-fit: cover;
    }

    /* Slayt konteynerının boyutları */
    .slideshow-container {
      max-width: 100%;
      overflow: hidden;
    }
  </style>
</head>
<body>
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="foto/eagle.jpg">
    </div>

    <div class="mySlides fade">
      <img src="foto/lion.jpg">
    </div>

    <div class="mySlides fade">
      <img src="foto/cat.jpg">
    </div>
  </div>

  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      slides[slideIndex-1].style.display = "block";  
      setTimeout(showSlides, 3000); // Her 3 saniyede bir slayt değiştir
    }
  </script>
</body>
</html>
