<?php
echo "<h2>Tambah User</h2>
<form method=post action=input_mhs.php>
<table>
<tr><td>Nim</td><td> : <input name='nim' type='text'></td></tr>
<tr><td>Nama</td><td> : <input name='nama' type='text'></td></tr>
<tr><td>Jenis Kelamin</td><td> : <input name='Gender' type='radio' value = 'P'>Perempuan
<input name='Gender' type='radio' value = 'P'>Laki-Laki</td></tr>
<tr><td>Alamat</td><td> : <input name='alamat' type='text'></td></tr>
<tr><td>Tanggal Lahir</td><td> : <input name='tgllhr' type='date'></td></tr>
<tr><td>Asal Sekolah</td><td> : <input name='asal_sekolah' type='text'></td></tr>

<tr><td colspan=2><input type='submit' value='SIMPAN'></td></tr>
</table>
</form>";
?>