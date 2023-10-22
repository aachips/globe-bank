<?php require_once('../../../private/initialize.php'); 

// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP 7.0

// htmlspecialchars($string) - how to prevent cross site scripting - do this for ALL dynamic data received by a user
echo h($id);

// challenge - add a page - link from /staff/index.php to /staff/pages/index.php
// add php and html for /staff/pages/index.php
// use /staff/subjects as a reference, but do not copy/paste

