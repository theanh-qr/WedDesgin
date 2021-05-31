<?php
	function dayInMonth($month){
		switch ($month) {
			case 1:
				echo 31;
				break;
			case 2:
				echo 28;
				break;
			case 3:
				echo 31;
				break;
			case 4:
				echo 30;
				break;
			case 5:
				echo 31;
				break;
			case 6:
				echo 30;
				break;
			case 7:
				echo 31;
				break;
			case 8:
				echo 31;
				break;
			case 9:
				echo 30;
				break;
			case 10:
				echo 31;
				break;
			case 11:
				echo 30;
				break;
			case 12:
				echo 31;
				break;

			default:
				echo "Ban chua nhap thang";
				break;
		}
	}

	dayInMonth(6);
?>