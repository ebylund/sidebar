<?php require_once("header.php"); ?>
<?php require_once("mysql.php"); ?>
<?php
$id = $_GET['id'];
//$id = mysqli_real_escape_string($connection, $_GET['id'];
$result = mysqli_query($connection, "SELECT * FROM drugs WHERE id = $id");
$row = mysqli_fetch_array($result);

//$name = mysqli_real_escape_string($connection, $_POST['name'];
//$rx_number = mysqli_real_escape_string($connection, $_POST['rx_number'];

//"UPDATE drugs SET name = '$name', email = '$email' WHERE id = '$id'" 



?>
<?php if($row): ?>
<form class="form-horizontal" method="post" action="update.php">
  <div class="form-group">
  <label for="exampleInputEmail1" class="col-sm-2">Drug Name</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="editDrugName" name="name"  value="<?= $row['name'] ?>" placeholder="Drug Name">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="col-sm-2">Rx Number</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="editRxNumber" name="rx_number" value="<?= $row['rx_number'] ?>" placeholder="Rx Number">
    </div>
  </div>

  <input type="hidden" class="form-control" id="EditDrugId" name="id" value="<?= $row['id'] ?>">
  <button type="submit" value="Update Drug" class="btn btn-default">Submit</button>
</form>

<?php else: ?>

<p>
 no such drug 
</p>


<?php endif ?>
<?php require_once("footer.php"); ?>
