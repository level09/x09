<?php
/**
 * @file template.php
 * Do some preprocessing here
 *
 */
?>

<?php
function x09_preprocess_node(&$vars, $hook) {
  

$vars['node_bottom'] = theme('blocks', 'node_bottom');


 
}
function x09_preprocess_page(&$variables) {
$variables['banner'] = list_images(path_to_theme() .'/images/banners');


}




function list_images($dirname=".") {
   $ext = array("jpg", "png", "jpeg", "gif");
   $files = array();
   if ($handle = opendir($dirname)) {
       while (false !== ($file = readdir($handle)))
           for ($i=0;$i<sizeof($ext);$i++)
               if (strstr($file, "." . $ext[$i]))
                   $files[] = $file;

       closedir($handle);
   }
   return ($files);
}