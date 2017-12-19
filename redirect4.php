<?php
session_start();
if(isset($_GET['ID'])){
$ch = $_GET['ID'];

switch ($ch){
	case 1:
		echo("Turn on light 1");
		$i=system('C:\Users\Saurabh3434\AppData\Local\Programs\Python\Python36-32\python.exe Socket.py 11');
		//$_SESSION["Pin1"]=$i;
		//python Socket call
	break;
	case 2:
		echo("Turn off light 1");
		$i=system('C:\Users\Saurabh3434\AppData\Local\Programs\Python\Python36-32\python.exe Socket.py 10');
		//$_SESSION["Pin1"]=$i;
		//python Socket call
	break;
	case 3:
		echo("Turn on light 2");
		$i=system('C:\Users\Saurabh3434\AppData\Local\Programs\Python\Python36-32\python.exe Socket.py 21');
		//$_SESSION["Pin2"]=$i;
		//python Socket call
	break;
	case 4:
		echo("Turn off light 2");
		$i=system('C:\Users\Saurabh3434\AppData\Local\Programs\Python\Python36-32\python.exe Socket.py 20');
		//$_SESSION["Pin2"]=$i;
		//python Socket call
	break;
	case 5:
		echo("Turn on light 3");
		$i=system('C:\Users\Saurabh3434\AppData\Local\Programs\Python\Python36-32\python.exe Socket.py 31');
		//$_SESSION["Pin3"]=$i;
		//python Socket call
	break;
	case 6:
		echo("Turn off light 3");
		$i=system('C:\Users\Saurabh3434\AppData\Local\Programs\Python\Python36-32\python.exe Socket.py 30');
		//$_SESSION["Pin3"]=$i;
		//python Socket call
	break;
	case 7:
		echo("Turn on light 4");
		$i=system('C:\Users\Saurabh3434\AppData\Local\Programs\Python\Python36-32\python.exe Socket.py 41');
		//$_SESSION["Pin4"]=$i;
		//python Socket call
	break;
	case 8:
		echo("Turn off light 4");
		$i=system('C:\Users\Saurabh3434\AppData\Local\Programs\Python\Python36-32\python.exe Socket.py 40');
		//$_SESSION["Pin4"]=$i;
		//python Socket call
	break;
	default:
}
//print $i;
if($i!=''){
$arr = str_split($i);
print_r($arr);
$_SESSION["Pin1"]=$arr[2];
$_SESSION["Pin2"]=$arr[3];
$_SESSION["Pin3"]=$arr[4];
$_SESSION["Pin4"]=$arr[5];
}
else{
	echo "could not refresh";
}





}
header("Refresh: 0;url=ControlPanelFor4Pin.php");

?>