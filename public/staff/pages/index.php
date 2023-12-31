<?php require_once('../../../private/initialize.php');
    
    $page_set = find_all_pages();

    $page_title = 'Pages';
    include(SHARED_PATH . '/staff-header.php'); 
    
    ?>



<div id="content">
    <div class="pages listing">
        <h1>Pages</h1>
        <div class="actions">
            <a class="action" href="new.php">Create New Page</a>
        </div>

        <div class="actions"><a href="#" class="action"></a></div>

        <table class="list">
            <tr>
                <th>ID</th>
                <th>Position</th>
                <th>Visible</th>
                <th>Name</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>

            <?php while($page = mysqli_fetch_assoc($page_set)) { 
                ?>
                <tr>
                    <td><?php echo h($page['id']); ?></td>
                    <td><?php echo h($page['subject_id']); ?></td>
                    <td><?php echo h($page['position']); ?></td>
                    <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
                    <td><?php echo h($page['menu_name']); ?></td>
                    <td><a class="action" href="<?php echo url_for('/staff/pages/show.php?id=' . h(u($page['id']))); ?>">View</a></td>
                    <td><a href="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($page['id']))) ?>" class="action">Edit</a></td>
                    <td><a href="" class="action">Delete</a></td>
                </tr>
            <?php
            }   ?>
        </table>
        <?= mysqli_free_result($page_set); ?>
    </div>
</div>
<?= include(SHARED_PATH . '/staff-footer.php'); ?>