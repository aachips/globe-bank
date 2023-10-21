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
    <nav>
        <ul>
            <li><a href="<?php echo url_for('/staff/index.php'); ?>" a>Menu</li>
            <li><a href="<?php echo url_for(('/staff/index.php')); ?>" a>History</li>
            <li><a href="<?php echo url_for(('/staff/index.php')); ?>" a>Leadership</li>
            <li><a href="<?php echo url_for(('/staff/index.php')); ?>" a>Contact US</li>
            <li><a href="<?php echo url_for(('/staff/index.php')); ?>" a>Globe Bank</li>
        </ul>
    </nav>
    </header>