<?=
// Handle form values sent by new.php
$menu_name = $_POST['menu-name'] ?? '';
$menu_name = $_POST['position'] ?? '';
$menu_name = $_POST['visible'] ?? '';

echo "Form parameters<br>";
echo "Menu name: " . $menu_name . "<br>";
echo "Position: " . $position . "<br>";
echo "Variable: " . $visible . "<br>";
