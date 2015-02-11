<?php require_once("header.php"); ?>
<?php require_once("mysql.php"); ?>
<?php

if (isset($_GET['max_number'])){
  $max_number = mysqli_real_escape_string($connection, $_GET['max_number']);
  $sql = "SELECT * FROM drugs WHERE rx_number < $max_number";
  }
else if (isset($_GET['biggest_first'])) {
  $sql = "SELECT * FROM drugs ORDER BY rx_number DESC";
}
else{
  $sql = "SELECT * FROM drugs";
}



$result = mysqli_query($connection, $sql);

?>

<a href="drug_index.php?max_number=45000">Show lowest Drug number</a>
<a href="drug_index.php?biggest_first=true">order Drug number</a>
<!-- <a href="index.php?show_smallest_rx=true">Show lowest Drug number</a> -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



<table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Drug Name</th>
      <th>Rx Number</th>
      <th>
        <span class="pull-right">
          Action
        </span>
      </th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = mysqli_fetch_array($result)): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td>
        <a href="show.php?id=<?= $row['id'] ?>">
          <?= $row['name'] ?>
        </a>
      </td>
      <td><?= $row['rx_number'] ?></td>
      <td>
        <span>
          <span id="edit_image" data-placement="top" data-toggle="tooltip" title="Edit">
            <a href="edit.php?id=<?= $row['id'] ?>">
              <span class="glyphicon glyphicon-pencil"></span>
            </a>
          </span>
        </span>
        <span>
          <span id="edit_image" data-placement="top" data-toggle="tooltip" title="Delete">
            <a href="destroy.php?id=<?= $row['id'] ?>">
              <span class="glyphicon glyphicon-trash"></span>
            </a>
          </span>
        </span>

          <form method="post" action="destroy.php">
             <input type="hidden" name="id" value="<?= $row['id'] ?>">
             <input type="submit" value="Destroy">
          </form>

      </td>
    </tr>
  <?php endwhile ?>
  </tbody>
</table>





<?php require_once("footer.php"); ?>
