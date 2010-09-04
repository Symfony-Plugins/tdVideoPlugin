<span id="video_is_active_action_<?php echo $td_video->getId() ?>">
  <?php if ($td_video->getActive()): ?>
    <?php include_partial('td_video/ajax_deactivate', array('td_video' => $td_video)) ?>
  <?php else: ?>
    <?php include_partial('td_video/ajax_activate', array('td_video' => $td_video)) ?>
  <?php endif; ?>
</span>