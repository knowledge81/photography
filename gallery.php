    <? 
      $gallery = 'gallery';
      include 'header.php';
    ?>
    <div style="padding-top:50px;">
        <!-- Slideshow container -->
        <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
        <div class="numbertext">1 / 4</div>
        <img src="images/coding.jpg" style="height:475px; width:100%">
        <div class="text">Coding</div>
        </div>

        <div class="mySlides fade">
        <div class="numbertext">2 / 4</div>
        <img src="images/coloredpieces.jpg" style="height:475px; width:100%">
        <div class="text" style="color:black">Colored Figurines</div>
        </div>

        <div class="mySlides fade">
        <div class="numbertext">3 / 4</div>
        <img src="images/puzzle.jpg" style="height:475px; width:100%">
        <div class="text">Puzzle</div>
        </div>

        <div class="mySlides fade">
        <div class="numbertext">4 / 4</div>
        <img src="images/woodenpieces.jpg" style="height:475px; width:100%">
        <div class="text">Wooden Pieces</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        </div>
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
            dots[i].className = dots[i].className.replace(" actives", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " actives";
        }
    </script>

  </body>
</html>