<?php require_once('../../../private/initialize.php');

$subject_set = find_all_subjects();


// $subjects = [
//     ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank'],
//     ['id' => '2', 'position' => '2', 'visible' => '2', 'menu_name' => 'Consumer'],
//     ['id' => '3', 'position' => '3', 'visible' => '3', 'menu_name' => 'Small Business'],
//     ['id' => '4', 'position' => '4', 'visible' => '4', 'menu_name' => 'Commercial'],
// ];

$page_title = 'Subjects';
include(SHARED_PATH . '/staff-header.php'); ?>

<div id="content">
    <div class="subjects listing">
        <h1>Subjects</h1>

        <div class="actions">
            <a class="action" href="new.php">Create New Subject</a>
        </div>

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

            <?php while($subject = mysqli_fetch_assoc($subject_set)) { ?>
                <tr>
                    <td><?php echo h($subject['id']); ?></td>
                    <td><?php echo h($subject['position']); ?></td>
                    <td><?php echo $subject['visible']; ?></td>
                    <td><?php echo h($subject['menu_name']); ?></td>
                    <td><a class="action" href="<?php echo url_for('/staff/subjects/show.php?id=' . h(u($subject['id']))); ?>">View</a></td>
                    <td><a class="action" href="<?php echo url_for('/staff/subjects/edit.php?id=' . h(u($subject['id']))) ?>">Edit</a></td>
                    <td><a class="action" href="">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
        <?= mysqli_free_result($subject_set); ?>
    </div>
</div>

<!-- Pongala en vo caja de jugo y  -->