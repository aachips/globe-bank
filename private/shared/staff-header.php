<?php if(!isset($page_title)) { $page_title = "Staff Area";}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GBI - <?php echo $page_title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/css/style.css'); ?>">
</head>
<body>
    <header>
        <img src="<?= url_for(PUBLIC_PATH . '/images/flatearth.webp');?>">
        <h1>Welcome to Globe Bank. Where Money comes from.</h1>
    <nav>
        <ul>
            <li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
            <li><a href="<?php echo url_for('/staff/index.php'); ?>">History</a></li>
            <li><a href="<?php echo url_for('/staff/index.php'); ?>">Leadership</a></li>
            <li><a href="<?php echo url_for('/staff/index.php'); ?>">Contact US</a></li>
            <li><a href="<?php echo url_for('/staff/index.php'); ?>">Globe Bank</a></li>
        </ul>
    </nav>
    </header>