<?php
require_once 'includes/database.php';
require_once 'includes/form.php';
$db = new Database();
$conn = $db->getConnection();

if (isset($_REQUEST['mod'])) {
    $mod = $_REQUEST['mod'];
} else {
    $mod = 'home';
}

switch ($mod) {
    case "home":
        require("home.php");
        break;
    case "tambah":
        require("tambah.php");
        break;
    case "about":
        require("about.php");
        break;
    case "form":
        require("form_input.php");
        break;
    default:
        require("home.php");
}

$form = new Form($conn);
?>