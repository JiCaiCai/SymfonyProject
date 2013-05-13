<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
  </head>
  <body>
    <?php use_helper('Javascript') ?>
  
    <div id="container" style="width:600px;margin:0 auto;border:1px solid grey;padding:10px">

      <div id="navigator1" style="display:inline;float:right">
        <?php include_component('homeGuest', 'currentDate'); ?>
      </div>
    
      <div id="navigator" style="display:inline;float:right">
        <ul>
            <li><?php echo link_to('Redirect the first module','homeGuest/index') ?></li>
            <li><?php echo link_to('AutoLoad Class Test','homeGuest/Actiontotem') ?>
        </ul>
      </div>
      <div id="title">
        <h1><?php //echo link_to('淘宝网','@homepage') ?></h1>
        <?php echo link_to_function(image_tag('poppen.png'),"alert('image button')"); ?>
      </div>

      <div id="content" style="clear:right">
        <!-- getRaw():得到没有转义之前的字符串。 -->
        <?php echo $sf_data->getRaw('sf_content') ?>
      </div>
      <hr />
      <div id="footer" style="bottom">
        Applcation Version: <?php echo sfConfig::get('app_version'); ?>
        <br />
        WebMaster: <?php echo sfConfig::get('app_mail_web_master'); ?>
        <br />
        Contact: <?php echo sfConfig::get('app_mail_contact'); ?>
      </div>
    </div>
    
	<?php 
// 		echo observe_field('name', array(
// 	    'update' => 'item_suggestion',
// 	    'url' => '@item_being_typed', )); 
//      ?>
  </body>
</html>
