<?php
    if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GBI: Globe Bank International - <?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/css/app.css'); ?>">
</head>

<body>

    <header>
        <h1>GBI Staff Area</h1>
    </header>

    <nav>
        <ul>
            <li><a href="<?php echo url_for('/admin/index.php'); ?>">Menu</a></li>
        </ul>
    </nav>