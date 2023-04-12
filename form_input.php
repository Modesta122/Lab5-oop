<?php
require_once 'includes/database.php';
require_once 'includes/form.php';

$db = new Database();
$conn = $db->getConnection();
$form = new Form($conn);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Modular Lab5Web</title>
	<link rel="stylesheet" type="text/css" href="includes/form.css">
</head>

<body>
	<h1>Modular Lab5 PHP OOP</h1>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$form->processForm($_POST);
	}
	$form->displayForm();
	?>
</body>

</html>