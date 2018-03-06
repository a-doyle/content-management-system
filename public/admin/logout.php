<?php
    require_once('../../private/init.php');

    log_out_admin();
    redirect_to(url_for('/admin/login.php'));
?>