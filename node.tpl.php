<?php
/**
 * @file node.tpl.php
 * Standard Drupal Node template 
 *
 */
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { 
  print ' sticky'; } ?><?php if (!$status) { 
    print ' node-unpublished'; } ?> clear-block">

<?php print $picture ?>

<?php if (!$page): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

  <div class="meta">
  <?php if ($submitted): ?>
    <span class="submitted"><?php print $submitted ?></span>
  <?php endif; ?>

  <?php if ($terms): ?>
    <div class="terms terms-inline"><?php print $terms ?></div>
  <?php endif;?>
  </div>

  <div class="content">
    <?php print $content ?>
  </div>

  <?php print $links; ?>
</div>