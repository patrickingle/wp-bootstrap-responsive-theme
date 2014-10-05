	<?php wp_footer(); ?>

	<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->   	
    <script src="<?php echo site_url(); ?>/wp-includes/js/jquery/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript">
    	jQuery(document).ready(function($){
			var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
		});
	</script>
  </body>
</html>
