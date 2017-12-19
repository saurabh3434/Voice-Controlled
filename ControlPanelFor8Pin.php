<!DOCTYPE html>
<html lang="en">
<head>
  <title>8 PIN CONTROL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
body{
	background: #333;
	}
</style>
<body>
<div class="container">
<div class="jumbotron">
<h1><center>8 PIN CONTROL PANEL</center></h1>
<center>
<?php
	for($i=1,$j=1;$i<=16;$i++,$j++){
		echo"<div class='btn-group' role='group'align='center'>";
		echo"<a href='redirect8.php?ID=$i' class='btn  btn-success'>TURN ON LED $j</button></a>";
		$i++;
		echo"<a href='redirect8.php?ID=$i' class='btn btn-danger'>TURN OFF LED $j</button></a>";
		echo"<button type='button' class='btn btn-default'>CURRENT STATE</button>";
		echo"</div>";
		echo"<div><br></div>";
	}
?>
</center>
</div>
</div>
</body>
</html>