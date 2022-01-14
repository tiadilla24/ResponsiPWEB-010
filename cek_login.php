<?php
session_start(); // fungsi untuk memulai session
include_once("koneksi.php"); //fungsi menghubungkan koneksi dengan database
$id_user = $_POST['id_user']; //mengambil data id_user dalam bentuk post
$pass = md5($_POST['password']); //mengambil data passwd dalam bentuk post akan tetapi sudah di generate menjadi MD5
$sql = "SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'"; // pilih data yang ada di dalam tabel user dimana id_user, password, email, nim berdasarkan data yang di dalam database
if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) { // jika kode captcha sama dengan kode captcha yang di inputkan berdasarkan session login maka,

    $login = mysqli_query($con, $sql);
    $ketemu = mysqli_num_rows($login); // data ketemu dan di tampilkan
    $r = mysqli_fetch_array($login); // data di ambil dalam bentuk array
    if ($ketemu > 0) { // jika data yang ada di dalam variabel ketemu lebih dari 0 (atau ada) maka session di bawah akan di proses kemudian akan menampilkan data2 nya
        $_SESSION['iduser'] = $r['id_user'];
        $_SESSION['passuser'] = $r['password'];
        echo "USER BERHASIL LOGIN<br>";
        echo "id user =", $_SESSION['iduser'], "<br>"; //tampilkan data id_user
        echo "password=", $_SESSION['passuser'], "<br>"; //tampilkan password
        echo "<td><a href=tampil_user.php><b>Tampil Data Admin</b></a></td>";
        echo "<br><a href=tampil_mhs.php><b>Tampil Data Siswa</b></a></br>";
        echo "<br><a href=validasi.php><b>Catatan</b></a></br>";
        echo "<a href=logout.php><b>LOGOUT</b></a></center>"; //link untuk beralih halaman logout
    } else {
        echo "<center>Login gagal! username/password/email tidak benar<br>"; //tampil tulisan 
        echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>"; // link untuk kembali ke halaman form login
    }
    mysqli_close($con);
} else {
    echo "<center>Login gagal! Captcha tidak sesuai<br>";
    echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";
}
?>
