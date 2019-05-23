<?php 
	$warna = array();
	$warna[] = "Blue";
	$warna[] = "Black";
	$warna[] = "Green";
	$warna[] = "Red";

	echo "Menampilkan isi array dengan for : <br>";
	for ($i=0; $i <count($warna) ; $i++) { echo "Do you like <font color = $warna[$i]>".$warna[$i]."</font> ? <br>";
	}

	echo "Menampilkan isi array dengan foreach : <br>";
	foreach ($warna as $warna) {
		echo "Do you like <font color = $warna>".$warna."</font> ? <br>";
	}
 ?>