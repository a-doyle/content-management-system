<?php require_once('../../private/init.php'); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li><a href="<?php echo url_for('/admin/subjects/index.php'); ?>">Subjects</a></li>
            <li><a href="<?php echo url_for('/admin/pages/index.php'); ?>">Pages</a></li>
            <li><a href="<?php echo url_for('/admin/auth_admins/index.php'); ?>">Admins</a></li>
        </ul>
    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>