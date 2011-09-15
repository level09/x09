<?php
/**
 * @file banner.php
 * Banner of the theme (slideshow) : reads images from the banners directory 
 *
 */
?>
<div id="bannerwrap">
  <div id="banner" class="container">
<?php 
if(isset($banner)) {
  foreach ($banner as $img) {
    echo theme('image', path_to_theme() . '/images/banners/' . $img, '', '');
  }
}
?>
  </div>
</div>
