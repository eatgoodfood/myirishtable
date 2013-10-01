<header class="banner" role="banner">
  <div class="container upper">
  	<div class="top-shelf">
  		<div class="pull-left"><span class="glyphicon glyphicon-phone-alt" Title="Phone"></span> <a href="tel:7037060450">(703)706-0450</a></div> 
  		<div class="pull-right"><a href="https://www.instagram.com/myirishtable" targte="_blank"><span class="ss-instagram ss-social-regular drop"></span> myirishtable</a></div>
  	</div>
    <div class="masthead">
	              <h1 class="jumbo"><span class="typeb">My</span> <span class="typea">Irish Table</span></h1>
	              <p class="jumbo"><span class="typea">Recipes from the Homeland and Restaurant Eve</span></p>
    </div>

    <nav role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-justified'));
        endif;
      ?>
    </nav>
  </div>
</header>
