	<div class="row">
 	
		<div class="col-sm-4">
			<div class="box">
	 			<h3 class="call-out"><span class="ss-calendar md-icon"></span></h3>
				<h3 class="call-out">March 11, 2014</h3>
				<ul class="marketing-list">
					<li>130 recipes showcasing modern Irish fare</li>
					<li>Debut cookbook from Cathal Armstrong</li>
					<li>A journey from Dublin to Washington, D.C.</li>
				</ul>
			</div>
		</div>
		
 		<div class="col-sm-4">
 			<div class="box">
	  			<h3 class="call-out"><span class="ss-cart md-icon"></span></h3>
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
	  			<h3 class="call-out"><span class="ss-icon ss-social-regular ss-instagram md-icon"></h3>
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