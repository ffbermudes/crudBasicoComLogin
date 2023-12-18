<?php
require_once 'databaseOperations.php';

echo '<pre>';
print_r ($_REQUEST);
echo '</pre>';

$cad_user = new Db();
$cad_user->cad_user($_REQUEST['usuarios'], $_REQUEST['pass'], $_REQUEST['re_pass']);
