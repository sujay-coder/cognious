
<footer>
    <div class="foot_info">
        <div class="container">   
            <div class="row">
                <div class="col-lg-4 col-md-8">
                    <img src="images/logo.png">
                    <p>Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h2>PRODUCTS</h2>
                    <ul class="foot_menu">
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Platform</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Partnership</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h2>SOLUTIONS</h2>
                    <ul class="foot_menu">
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Platform</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Partnership</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h2>RESOURCES</h2>
                    <ul class="foot_menu">
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Platform</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Partnership</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h2>GUIDE LINKS</h2>
                    <ul class="foot_menu">
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Platform</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Partnership</a></li>
                        <li><a href="#">About us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="foot_bottom">
        <div class="container">
            <div class="foot_bot_con">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h5>© 2021 cognius.ai. All Rights Reserved!</h5>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <ul>
                            <li><a href="#">Privacy Policy</a><span>|</span></li>
                            <li><a href="#">Legal Notice</a><span>|</span></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</footer>

<!--  <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>     -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.slimNav_sk78.min.js"></script>
<script type="text/javascript" src="https://gijsroge.github.io/owl-carousel2-thumbs/assets/OwlCarousel2Thumbs.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {	
	$('#navigation nav').slimNav_sk78();
	var owl = $('.main-slider');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items: 1,
        center: true,
        nav: true,
        thumbs: false,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],

    });	
    var owl = $('.testi_slider');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items: 1,
        center: true,
        nav: true,
        thumbs: true,
        thumbImage: true,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],
    });
    var owl = $('.product_rolling');
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        items:4,
        itemsMobile:[568,2],
        itemsTablet:[768,3],
        itemsTablet:[1024,3],
        center: false,
        nav: true,
        thumbs: false,
        thumbImage: false,
        thumbsPrerendered: true,
        thumbContainerClass: 'owl-thumbs',
        thumbItemClass: 'owl-thumb-item',
        navText: ['<span class="prev"><i class="fas fa-angle-left"></i></span>','<span class="next"><i class="fas fa-angle-right"></i></span>'],
        responsive: {
            0: {
              items: 1
            },

            600: {
              items: 2
            },

            1024: {
              items: 3
            },

            1366: {
              items: 4
            }
          }
    });
});
</script>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
 
}
 // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>


</body>
</html>
