<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>

<h1>Edit product</h1>

<?php
require_once("navbar.php");
require_once("helper.php");
require_once("db_connection.php");

$id = $_GET['id'];

list_editable_product(get_one(conn: $conn_string, id: $id));
?>

</body>
</html>