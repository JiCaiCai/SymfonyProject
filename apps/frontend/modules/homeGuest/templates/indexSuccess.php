<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
  </head>
  <body>
    <?php use_helper('Form') ?>
    <div id="container" style="width:500px;margin:0 auto;border:1px solid blue;padding:10px">

      <div id="navigator" style="display:inline;float:right">
        <ul>
            <li><?php echo link_to('Redirect the first module','homeGuest/index') ?></li>
            <li><?php echo link_to('ActionData2Template','@action_to_template') ?>
        </ul>
      </div>

      <div id="title">
        <h1><?php echo link_to('Title_Roy_Studio','@homeGuest') ?></h1>
      </div>

      <div id="content" style="clear:right">
        <?php echo 'Here we go?' ?>
      </div>
    </div>
    <hr />

    <div>
      <?php echo form_tag('homeGuest/SubmitForm'); ?>
        <?php echo label_for('name','what is your name?'); ?>
        <?php echo input_tag('name'); ?>
        <?php echo select_tag('pay_type',options_for_select($card_list, 'AMEX')); ?>
        <?php echo submit_tag('OK'); ?>
    </div>

  </body>
</html>

