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
            <li><?php echo link_to('Logout','homeGuest/logout') ?></li>
        </ul>
      </div>

      <div id="title">
        <h1><?php echo 'Welcome back, dear'.' '.$UserName; ?></h1>
      </div>

      <div id="content" style="clear:right">
         <?php if ($sf_user->isAuthenticated()): ?>
           <p>你有资格看这句话！<p/>
         <?php endif; ?> 
      </div>
    </div>
  </body>
</html>


