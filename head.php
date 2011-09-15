<?php
/**
 * @file head.php
 * HTML HEAD - for reuse on page-x.tpl.php templates
 *
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
<meta name="copyright" content="level09.net" />
<meta name="keywords" content="x09 theme, lightweight drupal theme, extensible drupal theme, Theme by level09 technologies" />
<meta name="description" content="x09 Theme, by Level09.net" />
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles; ?>
<?php print $scripts ?>
</head>