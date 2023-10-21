<?php require_once('../../../globe-bank/private/initialize.php'); ?>
<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff-header.php'); ?>

<main>
    <div id="content">
        <div class="main-menu">
            <h2>Main Menu</h2>
            <ul>
                <li><a href="<?php echo url_for('/staff/subjects/index.php'); ?>)">Subjects</a></li>
                <li><a href="<?php echo url_for('/staff/pages/index.php'); ?>)">Pages</a></li>
            </ul>
        </div>
    </div>    

</main>

<?php include(SHARED_PATH . '/staff-footer.php'); ?>