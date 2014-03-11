	<div class="row">
 	
		<div class="col-sm-4">
			<div class="box">
				<h3 class="call-out">Twitter</h3>
				<a class="twitter-timeline" href="https://twitter.com/MyIrishTable" data-widget-id="443462236623761408" data-chrome="noborders transparent">Tweets by @MyIrishTable</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
		
 		<div class="col-sm-4">
 			<div class="box">
	  			<h3 class="call-out">Availability</h3>
	  			<table class="table table-responsive">
	  				<thead>
	  					<tr>
	  						<th>USA</th>
	  						<th>UK & Ireland</th>
	  					</tr>
	  				</thead>
	  				<tbody>
	  					<tr>
	  						<td><a href="http://www.amazon.com/gp/product/1607744309?ie=UTF8&tag=randohouseinc5879-20&linkCode=as2&camp=1789&creative=9325&creativeASIN=1607744309" target="_blank">Amazon</a></td>
	  						<td>Amazon UK</td>
	  					</tr>
	  					<tr>
	  						<td><a href="http://search.barnesandnoble.com/booksearch/isbnInquiry.asp?EAN=9781607744306&cm_mmc=Random%20House-_-My+Irish+Table-HC--myirishtable-9781607744306-_-My+Irish+Table-HC--myirishtable-9781607744306-_-My+Irish+Table" target="_blank">Barnes & Noble</a></td>
	  						<td>Major Bookstores</td>
	  					</tr>
	  					<tr>
	  						<td><a href="http://www.indiebound.org/product/info.jsp?affiliateId=randomhouse1&isbn=1607744309" target="_blank">Indiebound</a></td>
	  						<td></td>
	  					</tr>
	  					<tr>
	  						<td><a href="https://itunes.apple.com/us/book/my-irish-table/id707354997?mt=11" target="_blank">iTunes</a></td>
	  						<td></td>
	  					</tr>
	  					<tr>
	  						<td><a href="https://play.google.com/store/search?q=9781607744313&c=books" target="_blank">Google Books</a></td>
	  						<td></td>
	  					</tr>
	  				</tbody>
	  			</table>
 			</div>	    		
 		</div>
 		
 		<div class="col-sm-4">
  			<div class="box">
	  			<h3 class="call-out">Instagram</h3>
	
	   			<!-- Make Instagram API Request -->
				<?php
			    $userid = "536557490";
				$accessToken = "536557490.e6842f2.73e76d1cf4f942d0a134a966831fad97";
				$url = "https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}&count=1";
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_TIMEOUT, 20);
				$result = curl_exec($ch);
				curl_close($ch); 
				$result = json_decode($result);
				?>
	
				<?php foreach ($result->data as $post): ?>
				<div class="center">
					<div>
						<a href="<?php echo $post->link ?>" target="_blank" title="<?php echo $post->caption->text ?>"><img class="insta-pic img-responsive" src="<?php echo $post->images->standard_resolution->url ?>" alt="<?php echo $post->caption->text ?>" /></a>
					</div>
				</div>
				<?php endforeach ?>
			</div>
 		</div>
 		
 	</div><!-- /.row -->