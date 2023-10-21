<!-- copied from new.php -->
<?= 
    require_once('../../../private/initialize.php'); 
    $test = $_GET['test'] ?? '';
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
    <form action="" method="post">
    <dl>
        <dt>Menu name</dt>
        <dd><input type="text" name="menu_name" value=""></dd>
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
