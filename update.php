<?php require_once("header.php"); ?>
<?php require_once("mysql.php"); ?>
<?php

$id = $_POST['id'];

$name = $_POST['name'];
$rx_number = $_POST['rx_number'];

$result = mysqli_query($connection, "UPDATE drugs SET name = '$name', rx_number = '$rx_number' WHERE id = $id");

header("Location: show.php?id='$id'");
//$row = mysqli_fetch_array($result);
//$id = mysqli_real_escape_string($connection, $_POST['id'];

?>

//"UPDATE drugs SET name = '$name', email = '$email' WHERE id = '$id'" 
//UPDATE drugs SET name = 'laravel', rx_number = '4040' WHERE id = '10';

<?php require_once("footer.php"); ?>



//display show page right after
//header('Location: show.php?id=$id');
