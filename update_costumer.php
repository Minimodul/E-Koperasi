<?php
include "koneksi.php";
mysql_query("UPDATE costumer SET ktp        = '$_POST[ktp]',
							  nama      = '$_POST[nama]',
							  jk      = '$_POST[jk]',
							  tmpt_lahir      = '$_POST[tmpt_lahir]',
							  tgl_lahir      = '$_POST[tgl_lahir]',
							  wn      = '$_POST[wn]',
							  pekerjaan      = '$_POST[pekerjaan]',
							  alamat      = '$_POST[alamat]',
							  email      = '$_POST[email]',
							  notelp      = '$_POST[notelp]'
                          WHERE id      = '$_POST[id]'");

mysql_query("UPDATE login SET id        = '$_POST[id]',
							  nama      = '$_POST[nama]'
                          WHERE id      = '$_POST[id]'");

header('location:view_costumer.php');
?>
