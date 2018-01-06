<?php
include "koneksi.php";
mysql_query("DELETE FROM costumer WHERE id='$_GET[id]'");
mysql_query("DELETE FROM login WHERE id='$_GET[id]'");
header('location:view_costumer.php');
?>