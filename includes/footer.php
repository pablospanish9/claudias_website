<!-- Footer starts here for cut point -->


<!-- Boilerplate footer Section Start  -->
<footer>

<div class="add">
  <h1>address</h1>
  <ul>
      <li><a href="https://goo.gl/maps/Rw7mJXWfoRJLprY26" target="_blank"><i class="fas fa-map-marker-alt"></i>4742 42nd Ave. SW #543
        Seattle, WA 98116
        </a></li>
      <!-- <li><a href=""><i class="fas fa-phone"></i>+92 3428561223</a></li> -->
      <li><a href="contactme.php"><i class="fas fa-envelope"></i>info@claudiaazar.com</a></li>
  </ul>
</div>

<div class="page">
  <h1>page</h1>
  <ul>
      <li><a href="index.php">home</a></li>
      <li><a href="aboutme.html">about </a></li>
      <li><a href="services.php">services</a></li>
      <li><a href="faqs.php">FAQs</a></li>
      <li><a href="contactme.php">contact</a></li>
  </ul>
</div>

<div class="link">
  <h1>follow me</h1>
  <a href="https://www.linkedin.com/in/claudia-a-zar-3a24056a/" id="facebook" target="_blank"> <i class="fab fa-facebook"></i></a>
  <a href="https://www.linkedin.com/in/claudia-a-zar-3a24056a/" target="_blank"><i class="fab fa-instagram" ></i></a>
      <a href="https://www.linkedin.com/in/claudia-a-zar-3a24056a/"target="_blank"><i class="fab fa-linkedin-in"></i></a>
</div>

<div class="payment">
  <h1>How to pay</h1>
  <p>After my service to you is completed, please send me a check, 
    or ask me to send you a link to pay via PayPal/Credit card </p>

  <a href=""><i class="fab fa-cc-visa"></i></a>
      <a href=""><i class="fab fa-cc-mastercard"></i></a>
      <a href="">  <i class="fab fa-paypal"></i></a>
          <!-- <a href=""> <i class="fab fa-amazon"></i></a> -->
</div>


<!-- Boilerplate footer Section End  -->


<!-- START School Footer -->
<div class="schoolfooter">
  <p><small>&copy; 2022  
      <a href="https://gabsep5.wixsite.com/mysite" target="_blank">by Pablo Sepulveda</a> 
      <!-- <a href="disclaimer.php" target="_blank">disclaimer</a>  -->
      ~ All Rights Reserved  ~ 
      <a id="html-checker" href="#">Check HTML</a> ~ 
      <a id="css-checker" href="#">Check CSS</a></small>
 </p>
</div>
</footer>

<!-- END School Footer --> 

<!-- END WRAPPER -->


<script>
//https://tinyurl.com/dynamic-html-checker
document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href); 

//manages mobile nav - from W3Schools
function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
               x.className += " responsive";
      } else {
               x.className = "topnav";
     }
}  

//  <!-- Script for smooth shrinking nav bar -->

const nav = document.querySelector('#navbar');
let navTop = nav.offsetTop;

function fixedNav() {
  if (window.scrollY >= 356) {    
    nav.classList.add('sticky');
  } else {
    nav.classList.remove('sticky');    
  }
}

window.addEventListener('scroll', fixedNav);

// Script for w3schools Navbar

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>
</body>
</html>