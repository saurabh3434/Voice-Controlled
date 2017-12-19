<?php
$i = $_GET["CMD"];
echo $i;
switch($i){
	
	case 'turn on 1': 
		//echo 'hiiii'; 	
		header("Refresh: 0;url=redirect4.php?ID=1");
		break;
	case 'turn off 1': 
		//echo 'hiiii'; 	
		header("Refresh: 0;url=redirect4.php?ID=2");
		break;
	case 'turn on 2': 
		//echo 'hiiii'; 	
		header("Refresh: 0;url=redirect4.php?ID=3");
		break;
	case 'turn off 2': 
		//echo 'hiiii'; 	
		header("Refresh: 0;url=redirect4.php?ID=4");
		break;
	case 'turn on 3': 
		//echo 'hiiii'; 	
		header("Refresh: 0;url=redirect4.php?ID=5");
		break;
	case 'turn off 3': 
		//echo 'hiiii'; 	
		header("Refresh: 0;url=redirect4.php?ID=6");
		break;
	case 'turn on 4': 
		//echo 'hiiii'; 	
		header("Refresh: 0;url=redirect4.php?ID=7");
		break;
	case 'turn off 4': 
		//echo 'hiiii'; 	
		header("Refresh: 0;url=redirect4.php?ID=8");
		break;
	default:
		header("Refresh: 0;url=ControlPanelFor4Pin.php");
}
?>