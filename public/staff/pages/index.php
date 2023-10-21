<?php require_once('../../../private/initialize.php');
    
    $pages = [
        ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'Globe Bank'],
        ['id' => '2', 'position' => '2', 'visible' => '2', 'menu_name' => 'History'],
        ['id' => '3', 'position' => '3', 'visible' => '3', 'menu_name' => 'Leadership'],
        ['id' => '4', 'position' => '4', 'visible' => '4', 'menu_name' => 'Contact Us'],
    ];

    $page_title = 'Pages';
    include(SHARED_PATH . '/staff-header.php'); ?>

<div id="content">
    <div class="pages listing">
        <h1>Pages</h1>

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

            <?php foreach($pages as $page) { ?>
                <tr>
                    <td><?php echo h($page['id']); ?></td>
                    <td><?php echo h($page['position']); ?></td>
                    <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
                    <td><?php echo h($page['menu_name']); ?></td>
                    <td><a class="action" href="<?php echo url_for('/staff/pages/show.php?id=' . h(u($page['id']))); ?>">View</a></td>
                    <td><a href="" class="action">Edit</a></td>
                    <td><a href="" class="action">Delete</a></td>
                </tr>
            <?php
            }   ?>
        </table>
    </div>
</div>