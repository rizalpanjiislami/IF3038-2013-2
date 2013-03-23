<?php

if(!isset($_COOKIE['username']))
{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>To Do List - For The Rest of Us</title>
<script language="javascript">
function validasi2(form){
  if (form.username.value == ""){
    alert("Anda belum mengisikan Username.");
    form.username.focus();
    return (false);
  }
     
  if (form.password.value == ""){
    alert("Anda belum mengisikan Password.");
    form.password.focus();
    return (false);
  }
  
  if ((form.username.value == "admin")&&(form.password.value == "admin"))
  {
    setTimeout("location.href = 'index.html';",1);
  }
  
  return (true);
}

function validasi(form2){
  if (form2.nama.value == ""){
    alert("Anda belum mengisikan Nama.");
    form2.nama.focus();
    return (false);
  }
  
  if (form2.email.value == ""){
    alert("Anda belum mengisikan Email.");
    form2.email.focus();
    return (false);
  }
  
  if (form2.username2.value == ""){
    alert("Anda belum mengisikan User Name.");
    form2.username2.focus();
    return (false);
  }
  
  if (form2.password2.value == ""){
    alert("Anda belum mengisikan Password.");
    form2.password2.focus();
    return (false);
  }
  
  if (form2.password2.value == form2.username2.value){
    alert("Password dan Username tidak boleh sama");
    form2.password2.focus();
    return (false);
  }
  
  if (form2.password2.value == form2.email.value){
    alert("Password dan Email tidak boleh sama");
    form2.password2.focus();
    return (false);
  }
  
  if (form2.repassword.value == ""){
    alert("Anda belum mengisikan Password Perulangan.");
    form2.repassword.focus();
    return (false);
  }
  
  if (form2.avatar.value == ""){
    alert("Anda belum mengupload Avatar.");
    form2.avatar.focus();
    return (false);
  }
  
  if (form2.repassword.value != form2.password2.value){
    alert("Password yang Anda masukkan tidak sama");
    form2.repassword.focus();
    return (false);
  }
  
  var un = document.form2.username2.value;
  un = un.length;
  if(un<5)
  {
	    alert ("Panjang username minimal 5 karakter");
		form2.username2.focus();
		return false;
  }
  
  var ps = document.form2.password2.value;
  ps = ps.length;
  if(ps<8)
  {
	    alert ("Panjang password minimal 8 karakter");
		form2.password2.focus();
		return false;
  }
  
  var ext = document.form2.avatar.value;
  ext = ext.substring(ext.length-3,ext.length);
  ext = ext.toLowerCase();
  if ((ext != 'jpg')&&(ext != 'jpeg'))
  {
	  	alert ("Format ekstensi harus JPG atau JPEG");
		return false;
  }
  
  var email = document.form2.email.value;
  var filter =/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
  if (!filter.test(email)) 
  {
     alert('Alamat email tidak valid');
     form2.email.focus();
     return false;
  }
  else
  {
  }
  
  return (true);
}
</script>
<style type="text/css">
<!--
textarea { border: 1; font: 14px Georgia, Serif; resize:none;}
textarea:hover, textarea:focus, #items td.total-value textarea:hover, #items td.total-value textarea:focus, .delete:hover { background-color:#EEFF88; }

input { border: 1; font: 14px Georgia, Serif; overflow: hidden; resize: none; }
input:hover, input:focus, #items td.total-value iinput:hover, #items td.total-value text:focus, .delete:hover { background-color:#EEFF88; }

p, h1, form, button{border:0; margin:0; padding:0;}
body {
	background-image: url(images/bgblue.jpg);
	background-repeat: repeat-x;
	background-color: #D6E8F4;
}
#wrapper button {
	position:absolute;
	left:403;
	top:388;
	margin-left:150px;
	width:125px;
	height:31px;
}
#aksi {
	position:absolute;
	left:1123px;
	top:336px;
	width:132px;
	height:31px;
	z-index:1;
	text-align: center;
}

#aksi2 {
	position:absolute;
	left:1172px;
	top:798px;
	width:73px;
	height:31px;
	z-index:1;
	text-align: center;
}

#wrapper {
	position: absolute;
	height: 220px;
	width: 357px;
	left: 908px;
	top: 172px;
	bottom: 50px;
}
#wrapper2 {
	position: absolute;
	height: 539px;
	width: 362px;
	left: 908px;
	top: 405px;
	bottom: 50px;
}

#wrapper3 {
	position: absolute;
	height: 220px;
	width: 357px;
	left: 909px;
	top: 161px;
	bottom: 50px;
}

#username {
	position:absolute;
	left:4px;
	top:86px;
	width:74px;
	height:23px;
	z-index:1;
}

#password {
	position:absolute;
	left:5px;
	top:136px;
	width:73px;
	height:23px;
	z-index:1;
}

#login {
	position:absolute;
	left:62px;
	top:32px;
	width:215px;
	height:23px;
	z-index:1;
}

#iklan {
	position:absolute;
	left:154px;
	top:177px;
	width:215px;
	height:654px;
	z-index:1;
}

#register {
	position:absolute;
	left:83px;
	top:41px;
	width:215px;
	height:23px;
	z-index:1;
}


#inputnama {
	position:absolute;
	left:130px;
	top:86px;
	width:215px;
	height:23px;
	z-index:1;
}

#inputpass {
	position:absolute;
	left:130px;
	top:135px;
	width:215px;
	height:21px;
	z-index:2;
}

#email {
	position:absolute;
	left:8px;
	top:130px;
	width:54px;
	height:21px;
	z-index:2;
}

#nama {
	position:absolute;
	left:8px;
	top:93px;
	width:51px;
	height:21px;
	z-index:2;
}

#ttl {
	position:absolute;
	left:7px;
	top:169px;
	width:98px;
	height:21px;
	z-index:2;
}

#username2 {
	position:absolute;
	left:8px;
	top:206px;
	width:71px;
	height:21px;
	z-index:2;
}

#password2 {
	position:absolute;
	left:8px;
	top:243px;
	width:71px;
	height:21px;
	z-index:2;
}

#repassword {
	position:absolute;
	left:8px;
	top:280px;
	width:109px;
	height:21px;
	z-index:2;
}

#inputnama2 {
	position:absolute;
	left:134px;
	top:94px;
	width:215px;
	height:21px;
	z-index:2;
}

#inputusername2 {
	position:absolute;
	left:138px;
	top:206px;
	width:215px;
	height:21px;
	z-index:2;
}

#inputemail {
	position:absolute;
	left:135px;
	top:133px;
	width:215px;
	height:21px;
	z-index:2;
}

#inputpassword2 {
	position:absolute;
	left:137px;
	top:246px;
	width:215px;
	height:21px;
	z-index:2;
}

#inputrepassword {
	position:absolute;
	left:137px;
	top:285px;
	width:215px;
	height:21px;
	z-index:2;
}

#tanggal {
	position:absolute;
	left:137px;
	top:168px;
	width:56px;
	height:21px;
	z-index:2;
}

#bulan {
	position:absolute;
	left:203px;
	top:168px;
	width:55px;
	height:21px;
	z-index:2;
}

#tahun {
	position:absolute;
	left:268px;
	top:168px;
	width:41px;
	height:21px;
	z-index:2;
}

#inputavatar {
	position:absolute;
	left:73px;
	top:348px;
	width:250px;
	height:21px;
	z-index:2;
}

#avatar {
	position:absolute;
	left:11px;
	top:349px;
	width:41px;
	height:21px;
	z-index:2;
}

#logo {
	position:absolute;
	left:153px;
	top:2px;
	width:1109px;
	height:155px;
	z-index:2;
}

#video {
	position:absolute;
	left:202px;
	top:224px;
	width:612px;
	height:155px;
	z-index:2;
}

#aksi table {
	text-align: center;
}
-->
</style>
</head>

<body OnLoad="document.login.username.focus();"> 
<form name="form" action="proseslogin.php" method="POST" onSubmit="return validasi2(this)">
  <div id="wrapper">
    <div id="inputnama">
  <input name="username" type="text" size="30" maxlength="25" />
</div>

<div id="inputpass">
<input name="password" type="password" size="30" maxlength="25" />
</div>

<div id="username">
<p> <strong>Username </strong></p>
</div>

<div id="password">
<p> <strong>Password</strong></p>
</div>

<div id="login">
<p align="center"> <strong>SILAHKAN LOGIN </strong></p>
</div>

<img src="images2/backgroundlogin2.jpg" width="355" height="215" /> </div>

<div id="aksi">
  <table width="127" border="0">
    <tr>
      <td width="59"><input name="login" type="submit" value="Log In" /></td>
      <td width="58"><input name="reset" type="reset" value="Reset" /></td>
    </tr>
  </table>
</div>
</form>


<form name="form2" action="" method="POST" enctype="multipart/form-data" onSubmit="return validasi(this)">

<div id="wrapper2">

<div id="inputnama2">
  <input name="nama" type="text" size="30" maxlength="25" />
</div>

<div id="inputrepassword">
  <input name="repassword" type="password" size="30" maxlength="25" />
</div>

<div id="inputusername2">
  <input name="username2" type="text" size="30" maxlength="25" />
</div>

<div id="inputpassword2">
  <input name="password2" type="password" size="30" maxlength="25" />
</div>

<div id="inputemail">
  <input name="email" type="text" size="30" maxlength="40" />
</div>

<div id="inputavatar">
  <input name="avatar" type="file" accept="image/jpeg" size="30" maxlength="40" />
</div>



<div id="username2">
<p> <b> Username </b> </p>
</div>

<div id="email">
<p> <b> Email </b> </p>
</div>

<div id="nama">
<p> <b> Nama </b> </p>
</div>

<div id="password2">
<p> <b> Password </b> </p>
</div>

<div id="repassword">
<p> <b> Password (lagi) </b> </p>
</div>

<div id="register">
<p> <b> BELUM PUNYA ACCOUNT? </b> </p>
</div>

<div id="ttl">
<p> <b> Tanggal Lahir </b> </p>
</div>

<div id="avatar">
<p> <b> Avatar </b> </p>
</div>

<div id="tanggal">
<select name="tanggal">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
</select>
</div>

<div id="bulan">
<select name="bulan">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
</select>
</div>

<div id="tahun">
<select name="tahun">
  <option value="1955">1955</option>
  <option value="1956">1956</option>
  <option>1957</option>
  <option>1958</option>
  <option>1959</option>
  <option>1960</option>
  <option>1961</option>
  <option>1962</option>
  <option>1963</option>
  <option>1964</option>
  <option>1965</option>
  <option>1966</option>
  <option>1967</option>
  <option>1968</option>
  <option>1969</option>
  <option>1970</option>
  <option>1971</option>
  <option>1972</option>
  <option>1973</option>
  <option>1974</option>
  <option>1975</option>
  <option>1976</option>
  <option>1977</option>
  <option>1978</option>
  <option>1979</option>
  <option>1980</option>
  <option>1981</option>
  <option>1982</option>
  <option>1983</option>
  <option>1984</option>
  <option>1985</option>
  <option>1986</option>
  <option>1987</option>
  <option>1988</option>
  <option>1989</option>
  <option>1990</option>
  <option>1991</option>
  <option>1992</option>
  <option>1993</option>
  <option>1994</option>
  <option>1995</option>
  <option>1996</option>
  <option>1997</option>
  <option>1998</option>
  <option>1999</option>
  <option>2000</option>
  <option>2001</option>
  <option>2002</option>
  <option>2003</option>
  <option>2004</option>
  <option>2005</option>
  <option>2006</option>
  <option>2007</option>
  <option>2008</option>
  <option>2009</option>
  <option>2010</option>
  <option>2011</option>
  <option>2012</option>
  <option>2013</option>
</select>
</div>

<img src="images2/backgroundregistrasi2.jpg" width="355" height="427" /> </div>

<div id="aksi2">
  <table width="78" border="0">
    <tr>
      <td width="59"><input name="registrasi" type="submit" value="Registrasi" /></td>
    </tr>
  </table>
</div>
</form>

<div id="logo">
<img src="images2/backgroundlogo.jpg" width="1112" height="163" /></div>

<div id="iklan">
<img src="images2/iklan2.jpg" width="732" height="658" /></div>

</body>
</html>

<?php
}

else
{
	header("location: home.php?link=selamatdatang");
}

?>