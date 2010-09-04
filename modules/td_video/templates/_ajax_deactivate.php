<?php use_helper('I18N') ?>
<li class="sf_admin_action_deactivate" id="ajax_deactivate_<?php echo $td_video->getId() ?>">
<?php use_helper('jQuery'); ?>
  <?php echo jq_link_to_remote(__('Deactivate', array(), 'sf_admin'), array(
    'update'   => 'video_is_active_action_'.$td_video->getId(),
    'url'      => '@ajax_video_deactivate?id='.$td_video->getId(),
    'script' => true,
    'complete' => jq_remote_function( array(
      'update' => 'video_is_active_column_'.$td_video->getId(),
      'url'    => 'graphics/empty',
      'script' => true
    )),
  )) ?>
</li>
