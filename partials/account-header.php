<?php

  if (!is_user_logged_in()) {
    echo "<script>window.location = 'http://tamarack.bkfk-t5yk.accessdomain.com/wp-login.php';</script>";
  }

?>

<?php

$cn_image = get_field('creative_network_profile_image', 'option');
$wvm_image = get_field('west_virginia_made_profile_image', 'option');
$t_image = get_field('trail_profile_image', 'option');

if( !empty($cn_image) ):
	// thumbnail
	$cn_thumb = $cn_image['sizes']['large'];

endif;

if( !empty($wvm_image) ):
	// thumbnail
	$wvm_thumb = $wvm_image['sizes']['large'];
endif;

if( !empty($t_image) ):
	// thumbnail
	$t_thumb = $t_image['sizes']['large'];
endif;

?>

<div class="content-third" style="background-image: url('<?php echo $cn_thumb; ?>')">
  <div class="content-circle-screen">
    <div class="content-text ">
      <div class="content-text-main">
        Your Creative Network Profile
      </div>
      <div class="content-text-cta">
        <a href="http://tamarack.bkfk-t5yk.accessdomain.com/creative-network-profile/">Join the Creative Network <i class="fa fa-angle-double-right"></i></a>
      </div>
    </div>
  </div>
</div>

<div class="content-third" style="background-image: url('<?php echo $wvm_thumb; ?>')">
  <div class="content-circle-screen">
    <div class="content-text ">
      <div class="content-text-main">
        Your Made in West Virginia Profile
      </div>
      <div class="content-text-cta">
        <a href="http://tamarack.bkfk-t5yk.accessdomain.com/west-virginia-made-profile/">Join Made in West Virginia <i class="fa fa-angle-double-right"></i></a>
      </div>
    </div>
  </div>
</div>

<div class="content-third" style="background-image: url('<?php echo $t_thumb; ?>')">
  <div class="content-circle-screen">
    <div class="content-text ">
      <div class="content-text-main">
        Your Trail Profile
      </div>
      <div class="content-text-cta">
        <a href="http://tamarack.bkfk-t5yk.accessdomain.com/trail-profile/">Join a Trail <i class="fa fa-angle-double-right"></i></a>
      </div>
    </div>
  </div>
</div>
