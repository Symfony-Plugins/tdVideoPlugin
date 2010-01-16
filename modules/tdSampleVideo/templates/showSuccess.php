<?php use_helper('I18N') ?>

<h1>Video</h1>

<?php use_helper('Video', 'Date') ?>

<div id="page">

    <h1><?php echo $video['name'] ?></h1>
    <p><?php echo __('Author', array(), 'td').': '.$video['author'] ?></p>
    <p><?php echo __('Recorded at', array(), 'td').': '.(false !== strtotime($video['recorded_at']) ? format_date($video['recorded_at'], "f") : '&nbsp;') ?></p>

    <a href="<?php echo video_path('flv'.'/'.$video['file']) ?>" style="display:block;width:520px;height:330px" id="player"></a>

    <script>
        flowplayer("player", "<?php echo video_path('swf/flowplayer-3.1.5.swf') ?>");
    </script>

    <p><?php echo __('Description', array(), 'td').': '.$video['description'] ?></p>

</div>
