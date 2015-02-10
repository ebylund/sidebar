
<?php

$connection = mysqli_connect("mysql.cs.dixie.edu", "ebylund", "Rootroot", "ebylund");

$drug_name = mysqli_real_escape_string($connection, $_POST['drug_name']);
$rx_number = mysqli_real_escape_string($connection, $_POST['rx_number']);

mysqli_query($connection, "INSERT INTO drugs (name, rx_number) VALUES ('$drug_name', '$rx_number')");

header("Location: drug_index.php");

?>
