<td colspan="6">
  <?php echo __('<strong>Nazwa</strong>: <i>%%name%%</i><span id="video_is_active_column_'.$td_video->getId().'">%%active%%</span><br /><strong>Autor</strong>: <i>%%author%%</i><br /><strong>Nagrano</strong>: <i>%%recorded_at%%</i><br /><strong>Opis</strong>: <div class="text_box">%%description_short%%</div><br /><strong>utworzono</strong>: <i>%%created_at%%</i><br /><strong>zmieniono</strong>: <i>%%updated_at%%</i>', array('%%name%%' => $td_video->getName(), '%%active%%' => get_partial('td_video/list_field_boolean', array('value' => $td_video->getActive())), '%%author%%' => $td_video->getAuthor(), '%%recorded_at%%' => false !== strtotime($td_video->getRecordedAt()) ? format_date($td_video->getRecordedAt(), "f") : '&nbsp;', '%%description_short%%' => $td_video->getDescriptionShort(), '%%created_at%%' => false !== strtotime($td_video->getCreatedAt()) ? format_date($td_video->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($td_video->getUpdatedAt()) ? format_date($td_video->getUpdatedAt(), "f") : '&nbsp;'), 'sf_admin') ?>
</td>