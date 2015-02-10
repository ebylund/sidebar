<?php require_once("header.php"); ?>
<?php require_once("mysql.php"); ?>
<?php
$id = $_GET['id'];
$result = mysqli_query($connection, "SELECT * FROM drugs WHERE id = $id");
$row = mysqli_fetch_array($result);
?>
<?php if ($row): ?>

  <p>
    <strong>Id: </strong><br>
    <?= $row['id']; ?>
  </p>
   <p>
    <strong>Name: </strong><br>
    <?= $row['name']; ?>
  </p>
   <p>
      <strong>Rx Number: </strong><br>
      <?= $row['rx_number']; ?>
    </p>
<?php else: ?>
<p>
  NO such student
</p>
<?php endif ?>
<?php require_once("footer.php"); ?>
