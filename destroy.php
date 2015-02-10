<?php require_once("header.php"); ?>
<?php require_once("mysql.php"); ?>
<?php

$id = $_POST['id'];

mysqli_query($connection, "DELETE FROM drugs WHERE id = '$id'");

header("Location: drug_index.php");

?>




<?php require_once("footer.php"); ?>
