<?php require_once('../../../private/init.php'); ?>

<?php
  require_login();
  redirect_to(url_for('/admin/index.php'));
?>