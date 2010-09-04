<?php use_helper('I18N') ?>
<li class="sf_admin_action_activate" id="ajax_activate_<?php echo $td_video->getId() ?>">
<?php use_helper('jQuery'); ?>
  <?php echo jq_link_to_remote(__('Activate', array(), 'sf_admin'), array(
    'update'   => 'video_is_active_action_'.$td_video->getId(),
    'url'      => '@ajax_video_activate?id='.$td_video->getId(),
    'script' => true,
    'complete' => jq_remote_function( array(
      'update' => 'video_is_active_column_'.$td_video->getId(),
      'url'    => 'graphics/tick',
      'script' => true
    )),
  )) ?>
</li>
