<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php use_javascript('jquery-1.6.1.min.js') ?>
    <?php use_javascript('vote.js') ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div class="head">
      <div class="menu">
        <?php echo link_to('Главная',url_for('/frontend_dev.php/')) ?>
        <div class="user_cab">
          <?php if ($sf_user->isAnonymous()) { ?>
            <?php echo link_to('Войти','/frontend_dev.php/login') ?>
          <?php } else { ?>
            <?php echo link_to('Мои новости','/frontend_dev.php/user/news') ?>
            <?php echo link_to('Выйти','/frontend_dev.php/logout') ?>
          <?php } ?>
        </div>
      </div>
    </div>
    <?php echo $sf_content ?>
  </body>
</html>

