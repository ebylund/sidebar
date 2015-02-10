<?php require_once("header.php"); ?>
	<form method="post" action="submitEmail.php">
		<div class="form-group">
			<label for="name">Name:</label>
      <input type="text" class="form-control" name="name"><br />
    </div>
		<div class="form-group">
			<label for="email">Email:</label>
      <input type="text" class="form-control" name="email"><br />
    </div>	
    <div class="form-group">
			<label for="subject">Subject:</label>
      <input type="text" class="form-control" name="subject"><br />
    </div>

		<div class="form-group">
			<label for="message">Message:</label>
      <textarea class="form-control" rows="3"></textarea><br />
    </div>

		<input type="submit" value="Submit">
  </form>

<?php require_once("footer.php"); ?>
