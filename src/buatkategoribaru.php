<?php

include "koneksi.php";

$namakategori = $_POST['namakategori'];
$penggunapanjang = $_POST['pengguna'];
$kodeuserpembuat = $_COOKIE['kodeuser'];

$pengguna = (explode(" ",$penggunapanjang));

foreach($pengguna as $a)
{
	$data = mysql_query("INSERT INTO kategori VALUES('$namakategori','$a','$kodeuserpembuat')");
}
?>

<html>
    <script type='text/javascript'>
    self.close();
    </script>
</html>