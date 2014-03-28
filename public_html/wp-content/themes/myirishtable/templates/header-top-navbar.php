<header class="banner" role="banner">
  <div class="upper">
	  <div class="container-fluid">
	  	<nav class="navbar" role="navigation">

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
	  </div>
  	<!--<div class="top-shelf">
  		<div class="pull-left"><span class="glyphicon glyphicon-phone-alt" Title="Phone"></span> <a href="tel:7037060450">(703)706-0450</a></div> 
  		<div class="pull-right"><a href="https://www.instagram.com/myirishtable" targte="_blank"><span class="ss-instagram ss-social-regular drop"></span> myirishtable</a></div>
  	</div>-->
    <div class="masthead">
	              <h1 class="blog-title">My Irish</h1> 
	              <h1 class="blog-title-2">Table</h1>
	              <h2 class="blog-description">Recipes from the Homeland<br />and Restaurant Eve</h2>
    </div>
   </div>
   
    

</header>
