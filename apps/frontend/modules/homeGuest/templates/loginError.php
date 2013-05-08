<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
  </head>
  <body>
    <div id="container" style="width:500px;margin:0 auto;border:1px solid blue;padding:10px">


      <div id="navigator" style="display:inline;float:right">
        <ul>
            <li><?php echo link_to('Back','homeGuest/logout') ?></li>
        </ul>
      </div>


      <div id="title">
        <h1> 帐号或者密码错误！ </h1>
      </div>
    </div>
  </body>
</html>


