<td class="sf_admin_boolean sf_admin_list_td_active" id="video_is_active_column_<?php echo $td_video->getId() ?>">
  <?php echo get_partial('td_video/list_field_boolean', array('value' => $td_video->getActive())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $td_video->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_author">
  <?php echo $td_video->getAuthor() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_recorded_at">
  <?php echo false !== strtotime($td_video->getRecordedAt()) ? format_date($td_video->getRecordedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description_short">
  <?php echo $td_video->getDescriptionShort() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($td_video->getUpdatedAt()) ? format_date($td_video->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
