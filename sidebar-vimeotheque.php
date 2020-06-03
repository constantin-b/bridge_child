<?php 
$bridge_qode_options = bridge_qode_return_global_options();
$bridge_qode_sidebar_id = bridge_qode_get_page_id();
?>
	<div class="column_inner">
		<aside class="sidebar">
			<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('vimeotheque-sidebar')) :
			endif;  ?>
		</aside>
	</div>
