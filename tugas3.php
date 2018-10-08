<?php
$t = "true";
$f = "false";
$var1=$_POST['fadida1'];
$var2=$_POST['fadida2'];
$truefalse=$_POST['truefalse'];

if ($var1=="true"&&$truefalse=="and"&&$var2=="true"){
	// echo 1 && 1;
	echo "true && true = $t";
}
else if ($var1=="true"&&$truefalse=="and"&&$var2=="false"){
	// echo 1 && 0;
	echo "true && false = $f";
}
else if ($var1=="false"&&$truefalse=="and"&&$var2=="true"){
	// echo 0 && 1;
	echo "false && true = $f";
}
else if($var1=="false"&&$truefalse=="and"&&$var2=="false"){
	// echo 0 && 0;
	echo "false && false = $f";
}

if ($var1=="true"&&$truefalse=="or"&&$var2=="true"){
	// echo 1 || 1;
	echo "true || true = $t";
}
else if ($var1=="true"&$truefalse=="or"&$var2=="false"){
	// echo 1 || 0;
	echo "true || false = $t";
}
else if ($var1=="false"&&$truefalse=="or"&&$var2=="true"){
	// echo 0 || 1;
	echo "false || true = $t";
}
else if($var1=="false"&&$truefalse=="or"&&$var2=="false"){
	// echo 0 || 0;
	echo "false || false = $t";
}

if ($var1=="true"&&$truefalse=="xor"&&$var2=="true"){
	// echo 1 Xor 1;
	echo "true Xor true = $f";
}
else if ($var1=="true"&&$truefalse=="xor"&&$var2=="false"){
	// echo 1 Xor 0;
	echo "true Xor false = $t";
}
else if ($var1=="false"&&$truefalse=="xor"&&$var2=="true"){
	// echo 0 Xor 1;
	echo "false && true = $t";
}
else if($var1=="false"&&$truefalse=="xor"&&$var2=="false"){
	// echo 0 Xor 0;
	echo "false && false = $f";
}

if ($truefalse=="!"&&$var2=="true"){
	// echo !1;
	echo "! true = $f";
}
else if ($truefalse=="!"&&$var2=="false"){
	// echo !0;
	echo "! false = $t";
}
 
?>