<?php
require_once('connection.php');
require_once('assets/functions/functions.php');

$controller=isset($_GET['controller']) ? $_GET['controller'] : 'matterentry';
$action=isset($_GET['action']) ? $_GET['action'] : 'view';

echo 'Controller:' . $controller . "<br />";
echo 'Action:' . $action . "<br /><br />";

require_once('views/templates/header.php');
require_once('routes.php');
require_once('views/templates/footer.php');

?>
