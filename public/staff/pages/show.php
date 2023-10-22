<?php require_once('../../../private/initialize.php');
    // $id = isset($_GET['id]) ? $_GET['id'] : '1';
    $id = $_GET['id'] ?? '1'; // PHP > 7.0
    $page_title = 'Show Page'; 
    include(SHARED_PATH . '/staff-header.php');
 ?>

<div id="content">
    <a href="<?php echo url_for('/staff/pages/index.php'); ?>" class="back-link">&laquo; Back to List</a>
    <div class="page show">
        Page ID: <?php echo h($id); ?>
    </div>
</div>
<?= include(SHARED_PATH . '/staff-footer.php'); ?>