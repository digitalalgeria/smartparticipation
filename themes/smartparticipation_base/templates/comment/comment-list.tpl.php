<?php
/**
 * @file 
 * Template for comments list.
 * 
 * @ingroup regroom
 */

?>

<?php if ( ! empty($comment['#items']) ) { ?>

  <?php
  foreach ($comment['#items'] as $item) { 
  ?>

    username: <?php print $item['username'];?>
    <br>
    <?php print $item['body'];?>
    <hr>

  <?php
  }
} 
?>