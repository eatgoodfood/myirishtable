<header class="banner" role="banner">
   
    <nav class="navbar" role="navigation">
    	<div class="container-fluid">
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
		</div>
  	</nav>

  	<div class="row">
	    <div class="col-lg-12">
	      <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
	    </div>
  	</div>
  	<div class="row">
	    <div class="col-lg-12">
	      <h2 class="blog-description"><?php bloginfo('description'); ?></h2>
	    </div>
  	</div>
  	<div class="row">
	    <div class="col-lg-12">
	      <h3 class="author-titles">Cathal Armstrong & David Hagedorn</h3>
	    </div>
  	</div>

</header>
