<?php
// Include the controller class
require_once '../controllers/RegistrationController.php';

// Create a new instance of the controller
$controller = new RegistrationController;

// Determine which action to take based on the request
$currentURL = "http";
if(isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
    $currentURL .= "s";
}
$currentURL .= "://";
if($_SERVER["SERVER_PORT"] != "80") {
    $currentURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
} else {
    $currentURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
}

$path = parse_url($currentURL, PHP_URL_PATH);
$pathFragments = explode('/', $path);
$end = end($pathFragments);

echo $end;
die();

// Dispatch the request to the appropriate method
switch ($end) {
    case 'page':
        $controller->create();
        break;
    case 'all-pages':
        $controller->index();
        break;
    default:
        $controller->show();
        break;
}
?>
