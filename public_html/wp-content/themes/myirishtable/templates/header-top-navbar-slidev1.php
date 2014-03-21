<header class="banner" role="banner">
  <div class="upper">
  	<div class="top-shelf">
  		<div class="pull-left"><span class="glyphicon glyphicon-phone-alt" Title="Phone"></span> <a href="tel:7037060450">(703)706-0450</a></div> 
  		<div class="pull-right"><a href="https://www.instagram.com/myirishtable" targte="_blank"><span class="ss-instagram ss-social-regular drop"></span> myirishtable</a></div>
  	</div>
    <div class="masthead">
	              <h1 class="jumbo"><span class="typeb">My</span> <span class="typea">Irish Table</span></h1>
	              <p class="jumbo"><span class="typea">Recipes from the Homeland and Restaurant Eve</span></p>
    </div>
   </div>
   
    <nav class="navbar navbar-inverse" role="navigation">

		<div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		</div>

	    <div class="collapse navbar-collapse" role="navigation">
	      <?php
	        if (has_nav_menu('primary_navigation')) :
	          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-justified'));
	        endif;
	      ?>
	    </div>
  	</nav>
  	
  	<!-- Carousel
    ================================================== -->
    <div class="hidden-xs">
	    <div id="myCarousel" class="carousel slide" data-interval="5000">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	        <li data-target="#myCarousel" data-slide-to="1"></li>
	        <li data-target="#myCarousel" data-slide-to="2"></li>
	      </ol>
	      <div class="carousel-inner">
	        <div class="item active">
	          <img src="/assets/img/carousel1.jpg" alt="First slide">
	          
	        </div>
	        <div class="item">
	          <img src="/assets/img/carousel2.jpg" alt="Second slide">
	          
	        </div>
	        <div class="item">
	          <img src="/assets/img/carousel3.jpg" alt="Third slide">
	          
	        </div>
	      </div>
	      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	    </div><!-- /.carousel -->
	</div><!-- /.carousel-container -->

</header>
