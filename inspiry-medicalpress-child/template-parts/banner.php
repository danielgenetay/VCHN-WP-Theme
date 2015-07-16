<?php
global $theme_options;
if($theme_options['display-banner']){
?><!-- banner -->
<div class="banner clearfix" style="background-repeat: no-repeat; background-position: center top; background-image: url('<?php echo get_banner_image(); ?>'); background-size: cover;"></div>
<!-- /banner --><?php } ?>
