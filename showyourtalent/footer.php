        <footer>
            <p>Show your talent<br/>
            ©2018</p>
            <div id="bas">
                <a href="newsletter.php">Newsletter</a>
                <a href="mentions-legales.php">Mentions légales</a>
                <a href="contact.php">Contact</a>
            </div>
        </footer>
    </body>

<!--**********************************************/
/**************** JS CAROUSEL *******************/
/***********************************************-->
<script> 
    var slides = document.querySelectorAll('#slides .slide');
    var currentSlide = 0; 
    var slideInterval = setInterval(nextSlide,4000); 
    function nextSlide() { slides[currentSlide].className = 'slide'; 
    currentSlide = (currentSlide+1)%slides.length; 
    slides[currentSlide].className = 'slide showing'; } 
</script>

<!--*********************************************************/
/**************** JS RETOUR HAUT DE PAGE *******************/
/*********************************************************-->
<script>
    document.addEventListener('DOMContentLoaded', function() {
      window.onscroll = function(ev) {
        document.getElementById("Retour").className = (window.pageYOffset > 100) ? "Visible" : "Invisible";
      };
    });
</script>


</html>