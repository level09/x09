<?php




function x09_preprocess_node(&$vars, $hook) {
  

$vars['node_bottom'] = theme('blocks', 'node_bottom');


 
}
function x09_preprocess_page(&$variables) {
$variables['banner'] = listImages(path_to_theme() .'/images/banners');


}




function listImages($dirname=".") {
   $ext = array("jpg", "png", "jpeg", "gif");
   $files = array();
   if($handle = opendir($dirname)) {
       while(false !== ($file = readdir($handle)))
           for($i=0;$i<sizeof($ext);$i++)
               if(strstr($file, ".".$ext[$i]))
                   $files[] = $file;

       closedir($handle);
   }
   return($files);
}