<footer class="content-info container" role="contentinfo">
	
	<div class="footer-content">
		
		<div class="row">
	    	
	    	<div class="col-sm-4 col-xs-4">
	    		<p class="ss-chat big footer-icon"></p>
	      		<?php dynamic_sidebar('sidebar-footer'); ?>
	    	</div>
	    
	    	<div class="col-sm-4 col-xs-4">
	    		<p class="ss-location big footer-icon"></p>
	      		<?php dynamic_sidebar('sidebar-footer'); ?>
	    	</div>
	    	
	    	<div class="col-sm-4 col-xs-4">
	    		<p class="ss-usergroup big footer-icon"></p>
		  <?php dynamic_sidebar('sidebar-footer'); ?>
		    </div>
		    
		</div><!-- /.row -->
		
	</div><!-- /.footer-content -->
	  
  	<div class="row sign-off">
   		
   		<div class="col-sm-12">
   			<p>&copy; <?php echo date('Y'); ?> <a href="http://eatgoodfoodgroup.com/" target="_blank">Eat Good Food Productions</a></p>
   		</div>
   		
   	</div><!-- /.row -->
    	
  
</footer>

<?php wp_footer(); ?>