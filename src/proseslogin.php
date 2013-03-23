<?php

include "koneksi.php";

$username = $_GET['username'];
$password = $_GET['password'];

$data = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");

$baris = mysql_fetch_array($data);

$foto = $baris['foto'];
$kodeuser = $baris['kodeuser'];

if($password==$baris['password'])
{ 
echo "ok";

setcookie("kodeuser", "$kodeuser", time()+3600000);
setcookie("username", "$username", time()+3600000);
setcookie("foto", "$foto", time()+3600000);

}
else
{
	
	echo"salah";
}

?>
