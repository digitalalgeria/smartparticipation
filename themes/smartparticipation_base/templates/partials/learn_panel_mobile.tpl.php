<?php
/**
 * @file 
 * Template for learn panel.
 * 
 * @ingroup regroom
 */

//kpr($panel);
?>

<?php if ( ! empty($panel['#items']) ) : ?>


  <div class="bs-accordion" id="learn-accordion-mobile">
    <?php foreach ($panel['#items'] as $index => $item) { ?>
      <?php $item_number = $index + 1; ?>
    <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#learn-accordion-mobile" href="#learn-item-mobile-<?php echo $item_number; ?>">
          <?php echo $item['tab_title']; ?>
        </a>
      </div>
      <div id="learn-item-mobile-<?php echo $item_number ?>" class="accordion-body collapse">
        <div class="accordion-inner">
          <span class="title"><?php echo $item['title']; ?></span>
          <span class="text"><?php echo $item['teaser']; ?></span>
          <span class="read-more-wrapper">
            <span class="read-more">
              <a href="<?php echo $item['url']; ?>">
                <?php echo t('Read More'); ?>
              </a>
            </span>
          </span>
          <div class="learn-video-wrapper">
            <?php if ($item['video']) { ?>
              <div class="learn-video" id="<?php echo 'learn-video-mobile-' . $item['nid']; ?>" data-video="<?php echo $item['video']; ?>" data-image="<?php echo $item['image']; ?>"></div>
            <?php } else { ?>
              <img src="<?php echo $item['image']; ?>" />
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  
<?php elseif (isset($panel['add_node_instructions']) && $panel['add_node_instructions']) : ?>

    <p><?php echo $panel['add_node_instructions']; ?></p>
    
<?php endif; ?>