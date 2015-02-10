<?php require_once("header.php"); ?>
<form class="form-horizontal" method="post" action="submit.php">
  <div class="form-group">
    <label for="exampleInputEmail1" class="col-sm-2" >Drug Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="exampleInputEmail1" name="drug_name" placeholder="Drug Name">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="col-sm-2">Rx Number</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="exampleInputPassword1" name="rx_number" placeholder="Rx Number">
    </div>
  </div>
  <button type="submit" value="Submit" class="btn btn-default">Submit</button>
</form>
<?php require_once("footer.php"); ?>
