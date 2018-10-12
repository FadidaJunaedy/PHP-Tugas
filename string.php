<?php
$masukkan = $_POST['kata'];
$kalimat = "Hypertext Preprocessor adalah bahasa skrip yang dapat ditanamkan atau disisipkan ke dalam HTML";
$karakter = strlen($masukkan);
$urutan = strpos($kalimat, $masukkan);
$cari=explode(" ", $kalimat);
$deteksi = count($cari);
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP!</title>
</head>
<body>
<center>
<br>
<br>
<br>
<br>
<p>
	<?php for ($i=0; $i<$deteksi; $i++) { 
	if ($masukkan == $cari[$i])
	{
		echo "<font color=red> $cari[$i]</font> ";
	}
	else{
		echo "$cari[$i]";
	}
}
?>
</p>
<table border="1" width="20%">
	<tr>
			<th colspan="2"><h1>Cari Kata!</h1></th>
	</tr>
	<tr>
		<td>Kata :</td>
		<td><?= "$masukkan"; ?></td>
	</tr>
	<tr>
		<td>Jumlah Karakter :</td>
		<td><?= "$karakter"; ?></td>
	</tr>
	<tr>
		<td>Urutan :</td>
	<td><?= "ke-$urutan";?></td>
	</tr>
</table>
</center>
</body>
</html>