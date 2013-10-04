<!-- Carousel
    ================================================== -->
    <div class="carousel-container">
	    <div id="myCarousel" class="carousel slide">
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
    
<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    
    <div class="container strip light">
    	<div class="content-holder">
	    	<div class="row">
	    		<div class="col-sm-5 col-sm-offset-1">
					<h3 class="call-out">March 11, 2014</h3>
					<ul class="marketing-list list-unstyled">
						<li><span class="ss-list md-icon"></span> 130 recipes showcasing modern Irish fare</li>
						<li><span class="ss-book md-icon"></span> Debut cookbook from Cathal Armstrong</li>
						<li><span class="ss-compass md-icon"></span> A journey from Dublin to Washington, D.C.</li>
					</ul>
	    		</div>
	    		<div class="col-sm-5 col-sm-offset-1">
	    			<h3 class="call-out">Pre-order</h3>
		    		<ul class="marketing-list">
				  		<li><a href="http://www.amazon.com/gp/product/1607744309?ie=UTF8&tag=randohouseinc5879-20&linkCode=as2&camp=1789&creative=9325&creativeASIN=1607744309" target="_blank">Amazon</a></li>
				  		<li><a href="http://search.barnesandnoble.com/booksearch/isbnInquiry.asp?EAN=9781607744306&cm_mmc=Random%20House-_-My+Irish+Table-HC--myirishtable-9781607744306-_-My+Irish+Table-HC--myirishtable-9781607744306-_-My+Irish+Table" target="_blank">Barnes & Noble</a></li>
				  		<li><a href="http://www.indiebound.org/product/info.jsp?affiliateId=randomhouse1&isbn=1607744309" target="_blank">Indiebound</a></li>
				  		<li><a href="https://itunes.apple.com/us/book/my-irish-table/id707354997?mt=11" target="_blank">iTunes</a></li>
				  		<li><a href="https://play.google.com/store/search?q=9781607744313&c=books" target="_blank">Google Books</a></li>
					</ul>
	    		</div>
	    	</div>
    	</div>
    </div>
    
<!-- Make Instagram API Request
    ================================================== -->
    <div class="hidden-xs">
				
		<div class="container strip dark">
		

			
			<div class="container content-holder">
			
				<div class="row">
				
					<?php
				    $userid = "536557490";
					$accessToken = "536557490.e6842f2.73e76d1cf4f942d0a134a966831fad97";
					$url = "https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}&count=6";
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_TIMEOUT, 20);
					$result = curl_exec($ch);
					curl_close($ch); 
					$result = json_decode($result);
					?>
	
					<?php foreach ($result->data as $post): ?>
					
					<div class="col-sm-2">
						<a href="<?php echo $post->link ?>" target="_blank" title="<?php echo $post->caption->text ?>"><img class="insta-pic img-responsive" src="<?php echo $post->images->thumbnail->url ?>" alt="<?php echo $post->caption->text ?>" /></a>
					</div>
					
					<?php endforeach ?>
	
				</div>
			
			</div><!-- /.container -->
			
		</div>
	</div><!-- /.hidden-xs -->
	
	
	
	
	
	