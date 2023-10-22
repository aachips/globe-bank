<!-- copied from new.php -->
<?= 
    require_once('../../../private/initialize.php'); 

    if(!isset($_GET['id'])) 
        redirect_to(url_for('/staff/subjects/index.php'));
    $id = $_GET['id'];

    $test = $_GET['test'] ?? '';
    if(postRequest()) {
        $menu_name = $_POST['menu-name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';
    
    echo "Form parameters<br>";
    echo "Menu name: " . $menu_name . "<br>";
    echo "Position: " . $position . "<br>";
    echo "Variable: " . $visible . "<br>";
    } else {

    }

    if($test == '404') 
        error_404();
    elseif($test == '500')
        error_500();
    elseif($test == 'redirect') 
        redirect_to(url_for('/staff/subjects/index.php'));
    else    
        echo 'No error'; 
        
    $page_title = 'Create Subject';
    include(SHARED_PATH . '/staff-header.php'); ?>

<div id="content">

<a href="<?php echo url_for('/staff/subjects/index.php'); ?>" class="back-link"></a>
    <h1>Create Subject</h1>
    <form action="<?php echo url_for('/staff/subjects/edit.php?id=' . h(u($id))); ?>" method="post">
    <dl>
        <dt>Menu name</dt>
        <dd><input type="text" name="menu_name" value="<?= echo $menu_name; ?>"></dd>
    </dl>
    <dl>
        <dt>Position</dt>
        <dd><select name="position" id="">
            <option value="1">1</option>
        </select>
        </dd>
    </dl>
    <dl>
        <dt>Visible</dt>
        <dd>
            <input type="hidden" name="visible" value="0">
            <input type="checkbox" name="visible" value="1">
        </dd>
        <div id="operations">
            <input type="submit" value="Create Subject">
        </div>
    </dl>


    </form>


</div>    
