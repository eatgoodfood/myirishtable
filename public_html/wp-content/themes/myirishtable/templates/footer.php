<footer class="content-info" role="contentinfo">
	
	<div class="footer-content">
		
		<div class="row">
	    	
	    	<div class="col-sm-4 col-xs-4">
	    		<p class="ss-chat big footer-icon"></p>
	      		<?php dynamic_sidebar('sidebar-footer'); ?>
	    	</div>
	    
	    	<div class="col-sm-4 col-xs-4">
	    		<p class="ss-location big footer-icon"></p>
	      		<?php dynamic_sidebar('sidebar-footer-b'); ?>
	    	</div>
	    	
	    	<div class="col-sm-4 col-xs-4">
	    		<p class="ss-usergroup big footer-icon"></p>
		  <?php dynamic_sidebar('sidebar-footer-c'); ?>
		    </div>
		    
		</div><!-- /.row -->
		
	</div><!-- /.footer-content -->
	  
  	<div class="row sign-off">
   		
   		<div class="col-sm-12">
   			<p>&copy; <?php echo date('Y'); ?> <a href="http://eatgoodfoodgroup.com/" target="_blank">Eat Good Food Productions</a></p>
   		</div>
   		
   	</div><!-- /.row -->
    	
  
</footer>
<script language="JavaScript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>
		<script> 
      		$(document).ready(function(){
          $('#myCarousel').carousel({
          	interval: 8000
          });
        });
    </script>
<?php wp_footer(); ?>