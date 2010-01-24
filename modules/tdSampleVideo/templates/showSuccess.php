<?php use_helper('I18N') ?>

<h1>Video</h1>

<?php use_helper('Video', 'Date') ?>

<div id="video">

  <h1><?php echo $video['name'] ?></h1>
  <div class="author">
    <span class="title"><?php echo __('Author', array(), 'td')?>: </span>
    <span class="value"><?php echo $video['author'] ?></span>
  </div>
  <div class="recorded_at">
    <span class="title"><?php echo __('Recorded at', array(), 'td')?>: </span>
    <span class="value"><?php echo (false !== strtotime($video['recorded_at']) ? format_date($video['recorded_at'], "f") : '&nbsp;') ?></span>
  </div>

  <a href="<?php echo '/uploads/td/video/'.$video['file'] ?>" style="display:block;width:520px;height:330px" id="player"></a>

  <script>
    flowplayer("player", "<?php echo video_path('swf/flowplayer-3.1.5.swf') ?>");
  </script>

  <div class="description">
    <span class="title"><?php echo __('Description', array(), 'td')?>: </span>
    <span class="value"><?php echo $video['description'] ?></span>
  </div>

</div>
