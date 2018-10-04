<?php
$var1=$_POST['fadida3'];
$var2=$_POST['fadida4'];
$arit=$_POST['arith'];
if($var1==""){
	echo "Anda belum mengisi nilai Var1";
}
else if($var2==""){
	echo "Anda belum mengisi nilai Var2";
}
if($arit=="+"){
	echo $var1+$var2;
	}
	else if($arit=="-"){
	echo $var1-$var2;
	}
	else if($arit=="*"){
		echo $var1*$var2;
	}
	else if($arit=="/"){
		echo $var1/$var2;
	}
	else if($arit="%"){
		echo $var1%$var2;
	}
?>