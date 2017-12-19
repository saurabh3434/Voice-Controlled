<?php
$ch = $_GET['ID'];;
switch ($ch){
	case 1:
		echo("Turn on light 1");
		//python Socket call
	break;
	case 2:
		echo("Turn off light 1");
		//python Socket call
	break;
	case 3:
		echo("Turn on light 2");
		//python Socket call
	break;
	case 4:
		echo("Turn off light 2");
		//python Socket call
	break;
	case 5:
		echo("Turn on light 3");
		//python Socket call
	break;
	case 6:
		echo("Turn off light 3");
		//python Socket call
	break;
	case 7:
		echo("Turn on light 4");
		//python Socket call
	break;
	case 8:
		echo("Turn off light 4");
		//python Socket call
	break;
	case 9:
		echo("Turn on light 5");
		//python Socket call
	break;
	case 10:
		echo("Turn off light 5");
		//python Socket call
	break;
	case 11:
		echo("Turn on light 6");
		//python Socket call
	break;
	case 12:
		echo("Turn off light 6");
		//python Socket call
	break;
	case 13:
		echo("Turn on light 7");
		//python Socket call
	break;
	case 14:
		echo("Turn off light 7");
		//python Socket call
	break;
	case 15:
		echo("Turn on light 8");
		//python Socket call
	break;
	case 16:
		echo("Turn off light 8");
		//python Socket call
	break;
	default:
		
}



header('Refresh: 3;url=ControlPanelFor8Pin.php');

?>