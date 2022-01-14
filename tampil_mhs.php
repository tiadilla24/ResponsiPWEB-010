<?php
echo "<h2>Mahasiswa</h2>
<td><a href=cek_login.php><b>Home</b></a></td>
<form method=POST action=form_mhs.php>
<input type=submit value='Tambah Mhs'>
</form>
<td><a href='mhs_json.php'>Tampilkan JSON</a></td>
<br><a href='mhs_xml.php'>Tampilkan XML</a></br>
<td><a href='searching.php'>Cari</a></td>
<table>
<tr><th>No</th><th>NIM</th><th>Nama</th><th>Jkel</th><th>Alamat</th><th>Tanggal Lahir</th><th>Asal Sekolah</th><th>Action</th>
></tr>";
include "koneksi.php";
$sql="select * from mahasiswa order by nim";
$tampil = mysqli_query($con,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
while ($r = mysqli_fetch_array($tampil))
{
echo "<tr><td>$no</td><td>$r[nim]</td>
<td>$r[nama]</td>
<td>$r[jkel]</td>
<td>$r[alamat]</td>
<td>$r[tgllhr]</td>
<td>$r[asal_sekolah]</td>
<td><a href='hapus_mhs.php?id=$r[nim]'>Hapus</a></td>
</tr>";
 $no++;
}
echo "</table>";
} else {
 echo "0 results";
 }
 mysqli_close($con);
?>
<a href='lap_mhs.php?nim=$user_data[nim]'>Print Data</a></td></tr>