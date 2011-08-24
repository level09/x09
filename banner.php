<div id="bannerwrap">
  <div id="banner" class="container">
    <?php 
if(isset($banner)) {
	foreach ($banner as $img) {
		echo theme('image',path_to_theme() .'/images/banners/' .$img,'','');
	}
}
 ?>
  </div>
</div>
