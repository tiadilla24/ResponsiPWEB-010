<?php
include "koneksi.php";
$sql="delete from mahasiswa where nim= '$_GET[id]'";
mysqli_query($con, $sql);
 mysqli_close($con);
header('location:tampil_mhs.php');
?>