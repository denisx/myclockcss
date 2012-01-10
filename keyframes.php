<?php
	header("Content-type: text/css");
	$hour = date('g');
	$min = date('i');
	$sec = date('s');

	$hour = round(($hour + $min/60)*30);
	$min = round(($min + $sec/60)*6);
	$sec = $sec*6;

	$hour_to = $hour + 360;
	$min_to = $min + 360;
	$sec_to = $sec + 360;
	echo '/*' . date('H:i:s') . '*/' . "\n\n";
?>
.myClockJS .arr>b:nth-child(1) {
	-webkit-animation-name: arr1;
	-moz-animation-name: arr1;
	animation-name: arr1;
}

@-webkit-keyframes arr1 {
	from {
		-webkit-transform: rotate(<?echo $hour;?>deg);
	}
	to {
		-webkit-transform: rotate(<?echo $hour_to;?>deg);
	}
}
@-moz-keyframes arr1 {
	from {
		-moz-transform: rotate(<?echo $hour;?>deg);
	}
	to {
		-moz-transform: rotate(<?echo $hour_to;?>deg);
	}
}
@keyframes arr1 {
	from {
		transform: rotate(<?echo $hour;?>deg);
	}
	to {
		transform: rotate(<?echo $hour_to;?>deg);
	}
}



.myClockJS .arr>b:nth-child(2) {
	-webkit-animation-name: arr2;
	-moz-animation-name: arr2;
	animation-name: arr2;
}
@-webkit-keyframes arr2 {
	from {
		-webkit-transform: rotate(<?echo $min;?>deg);
	}
	to {
		-webkit-transform: rotate(<?echo $min_to;?>deg);
	}
}
@-moz-keyframes arr2 {
	from {
		-moz-transform: rotate(<?echo $min;?>deg);
	}
	to {
		-moz-transform: rotate(<?echo $min_to;?>deg);
	}
}
@keyframes arr2 {
	from {
		transform: rotate(<?echo $min;?>deg);
	}
	to {
		transform: rotate(<?echo $min_to;?>deg);
	}
}




.myClockJS .arr>b:nth-child(3) {
	-webkit-animation-name: arr3;
	-moz-animation-name: arr3;
	animation-name: arr3;
}
@-webkit-keyframes arr3 {
	from {
		-webkit-transform: rotate(<?echo $sec;?>deg);
	}
	to {
		-webkit-transform: rotate(<?echo $sec_to;?>deg);
	}
}
@-moz-keyframes arr3 {
	from {
		-moz-transform: rotate(<?echo $sec;?>deg);
	}
	to {
		-moz-transform: rotate(<?echo $sec_to;?>deg);
	}
}
@keyframes arr3 {
	from {
		transform: rotate(<?echo $sec;?>deg);
	}
	to {
		transform: rotate(<?echo $sec_to;?>deg);
	}
}