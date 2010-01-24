<?php use_helper('Video') ?>

<a href="<?php echo '/uploads/td/video/'.$td_video['file'] ?>" style="display:block;width:520px;height:330px" id="player"></a>

<script>
  flowplayer("player", "<?php echo video_path('swf/flowplayer-3.1.5.swf') ?>");
</script>