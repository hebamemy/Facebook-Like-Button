<div class="wrap">
	<div id='icon-tools' class="icon32"></div><h2><?php _e('Facebook Like Settings', 'PressGraphLike') ?></h2>
	<form action="" method='post'>
		<?php if(function_exists('wp_nonce_field')){wp_nonce_field('pressGraph-Like-action_save_settings');} ?>
		<div id="poststuff">
		    <!-- #post-body .metabox-holder goes here -->
		    <div id="post-body" class="metabox-holder columns-<?php echo 1 == get_current_screen()->get_columns() ? '1' : '2'; ?>">
			    <!-- meta box containers here -->
			    <div id="post-body-content">
				    <!-- #post-body-content -->
				</div>
				
				<div id="postbox-container-1" class="postbox-container">
				    <div class="postbox">
						<h3 class="hndle"><span>Save Settings</span></h3>
						<div class="inside">
						</div>
				    </div>
				<div id="postbox-container-2" class="postbox-container">
				    <?php do_meta_boxes('PressGraphLikeSettings','advanced', null); ?>
				</div>
				
			</div>
		</div>
	</form>
</div>

 <script type="text/javascript">
    //<![CDATA[
    jQuery(document).ready( function($) { 
             postboxes.add_postbox_toggles('settings_page_shiba_test');
        });
    //]]>
</script>