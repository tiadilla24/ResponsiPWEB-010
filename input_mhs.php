<?php
include "koneksi.php";
$nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $jkel = $_POST['jkel'];
 $alamat = $_POST['alamat'];
 $tgllhr = $_POST['tgllhr'];
 $asal_sekolah = $_POST['asal_sekolah'];
$sql = "INSERT INTO mahasiswa(nim, nama, jkel, alamat, tgllhr, asal_sekolah) VALUES ('$nim', '$nama', 
'$jkel','$alamat', 'tgllhr', 'asal_sekolah')";
$query=mysqli_query($con, $sql);
mysqli_close($con);
header('location:tampil_mhs.php');
?>