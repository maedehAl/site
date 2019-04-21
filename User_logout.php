<?php
setcookie("CUser", "", time() - 1, "/");
header("Location: index.php");

?>