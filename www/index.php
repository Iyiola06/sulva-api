<?php
ob_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

$page404 = true;

$dummy = "dummy.png";
$fbid = "2213158278782711";
session_start();
// die("Critical Maintenance in progress");
#Define App Path
define("D_PATH", dirname(dirname(__FILE__)));
CONST APP_PATH = D_PATH."/v1";
#load database
#load Controllers(functions)
include D_PATH."/.env/config.php";
#load routes
require APP_PATH."/models/model.php";
require APP_PATH."/controllers/controller.php";
#load routes
// require APP_PATH."/routes/router.php";

$url = ($_SERVER["REQUEST_URI"]);



include APP_PATH."/routes/router.php";
include APP_PATH."/routes/ajax_router.php";
include APP_PATH."/routes/admin_router.php";

if ($page404 === true) {
  include APP_PATH."/views/404.php";

}

 ?>
