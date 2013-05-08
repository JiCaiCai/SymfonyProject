<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
  </head>
  <body>
    <div id="container" style="width:600px;margin:0 auto;border:1px solid grey;padding:10px">
      <?php use_helper('Text', 'Date') ?>
      <?php echo $content.'<br />' ?>
      <hr />
      <?php sfConfig::set('first','blackberry!'); ?>
      <?php echo sfConfig::get('first','no data inside'); ?>
      <hr />
      <?php $myPhone = new Phone(); echo $myPhone->price; ?>
      <hr />
      <?php if ($comments) : ?>
      <p><?php echo count($comments) ?> comment<?php if (count($comments) > 1) : ?>s<?php endif; ?> to this post.</p>
      <?php foreach ($comments as $comment): ?>
      <p><em>posted by <?php echo $comment->getAuthor() ?> on <?php echo format_date($comment->getCreatedAt()) ?></em></p>
      <div class="comment" style="margin-bottom:10px;">
        <?php echo simple_format_text($comment->getBody()) ?>
      </div>
      <?php endforeach; ?>
      <?php endif; ?>
   </div>
  </body>
</html>

