<!DOCTYPE html>
<html lang="en">
<head>
  <title>4 PIN CONTROL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
  <script>
if (annyang) {
  var commands = {
    'new command *name': function(name) {
			var n = name;
			window.location="VoiceRedirect.php?CMD="+n;
			},
    'Sign out': function() {  window.location="redirect4.php?ID=1" },
    'Sign in': function() { alert("Sign in"); },
    'Ip *ip': function(ip) { alert(ip); }
	
  }
  annyang.addCommands(commands);
  annyang.start();
}
</script>
<style>
.instruction{
	margin-left:100px;
	margin-right:100px;
	background-color: black;
	border-radius: 25px;
	
}
</style>
</head>
<style>
body{
	background: #333;
	}
</style>
<body>
<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">HomeControl</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">4Pin Control</a></li>
      <li><a href="#">About us</a></li>
    </ul>
  </div>
</nav>
<div class="jumbotron">
<h1><center>4 PIN CONTROL PANEL</center></h1>
<center>
<?php
	session_start();
	if(!isset($_SESSION["Pin1"])){
		$_SESSION["Pin1"]=0;
		$_SESSION["Pin2"]=0;
		$_SESSION["Pin3"]=0;
		$_SESSION["Pin4"]=0;
	}
	
	$pins = array();
	$pins[0]=$_SESSION["Pin1"];
	$pins[1]=$_SESSION["Pin2"];
	$pins[2]=$_SESSION["Pin3"];
	$pins[3]=$_SESSION["Pin4"];
	//print_r($pins);
	
	for($i=1,$j=1;$i<=8;$i++,$j++){
		echo"<div class='btn-group' role='group'align='center'>";
		echo"<a href='redirect4.php?ID=$i' class='btn  btn-success'>TURN ON LED $j</button></a> ";
		$i++;
		echo" <a href='redirect4.php?ID=$i' class='btn btn-danger'>TURN OFF LED $j</button></a> ";
		if($pins[$j-1]=='0')
			echo" <button type='button' class='btn btn-danger disabled'>OFF</button> ";
		else
			echo" <button type='button' class='btn btn-success disabled'>ON</button> ";
		echo"</div>";
		echo"<div><br></div>";
	}
?>
</center>
</div>
</div>
<div class="instruction">
		<center><font color="white"><b> Instructions</b></font></center>
		<center><font color="white"> To ON light, speak "New Command TURN ON 'light no.' "</font><br>
		<font color="white"> To OFF light, speak "New Command TURN OFF 'light no.' "</font></center>
</div>
</body>
</html>