<?php

setcookie("username", "", time()-3600000);

header("location:index.php");

?>