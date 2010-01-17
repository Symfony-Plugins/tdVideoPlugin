<?php use_helper('I18N', 'Date') ?>

<h1><?php echo __('Video list', array(), 'td') ?></h1>

<?php if ($videos): ?>
<ul id="video">
  <?php foreach ($videos as $video): ?>
    <li>
      <div class="name">
        <span class="title"><?php echo __('Name', array(), 'td') ?>: </span>
        <span class="value"><?php echo $video['name'] ?></span>
      </div>
      <div class="author">
        <span class="title"><?php echo __('Author', array(), 'td') ?>: </span>
        <span class="value"><?php echo $video['author'] ?></span>
      </div>
      <div class="recorded_at">
        <span class="title"><?php echo __('Recorded at', array(), 'td') ?>: </span>
        <span class="value"><?php echo (false !== strtotime($video['recorded_at']) ? format_date($video['recorded_at'], "f") : '&nbsp;') ?></span>
      </div>
      <div class="link">
        <span><?php echo link_to(__('watch it', array(), 'td'), '@td_sample_video_show?file='.$video['file']) ?></span>
      </div>
    </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>
