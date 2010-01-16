<?php use_helper('I18N') ?>

<h1><?php echo __('Video list', array(), 'td') ?></h1>

<?php if ($videos): ?>
<ul>
  <?php foreach ($videos as $video): ?>
    <li>
      <div>
        <span class="video_name"><?php echo $video['name'] ?></span>
        <span class="video_author"><?php echo $video['author'] ?></span>
        <span class="video_released_at"><?php echo $video['recorded_at'] ?></span>
        <span class="video_link"><?php echo link_to(__('watch it', array(), 'td'), '@td_sample_video_show?file='.$video['file']) ?></span>
      </div>
    </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>
