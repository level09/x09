<?php
/**
 * @file Page.tpl.php
 * Main page template 
 *
 */
?>
<?php include_once('head.php'); ?>
<body  class="<?php echo $body_classes; ?>">
<div id="topstrip"></div>
<div id="headerwrap">
  <div id="header" class="container">
    <?php
 if ($logo) {
 ?>
    <div id="logo">

              <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a>
   
   <?php         }
?>
    </div>
    <div id="nav">
      <?php echo menu_tree($menu_name='primary-links'); ?>
    </div>
    <!-- Nav //-->
  </div>
  <!-- header //-->
</div>
<!-- header wrap//-->
<?php include_once('banner.php'); ?>
<div id="page" class="container">
  <div id="main" class="span-15 column">
    <div class="main-pad"> 
    <?php echo $content_top; ?>
   	<?php  if ($breadcrumb) 
print $breadcrumb; ?>
        <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
        <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
        <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
        <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
        <?php if ($show_messages && $messages): ?> <div><?php print $messages;?></div> <?php endif; ?>
        <?php print $help;  ?> <?php print $content ?>

    </div>
  </div>
  <div class="span-9 last" id="sidebar">
  
  
 	 <div class="sidebar-pad">
  <div class="inner-pad">
    <?php print $left; ?>
    </div>
  	</div>
  </div>
</div>
<div id="footerwrap">
  <div id="footer" class="container">
  	<?php echo $footer; ?>
    <p>copyright (c) 2011 - Developed by <a href="http://www.level09.net" target="_blank">Level09 Technologies</a></p>  </div>
</div>
<?php print $closure; ?>
</body>
</html>
