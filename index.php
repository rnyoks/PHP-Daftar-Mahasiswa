<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran Mahasiswa</title>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

</head>
<body>
<header>
<div class="jumbotron">




<div class="row justify-content-center">
          <div class="col-md-4" data-aos="fade-right" data-aos-duration="2000">
            <img src="gunadarma.png" width="150px" height="150px" class="rounded-circle mt-2" />
          </div>
          <div class="col-md-4" data-aos="fade-left" data-aos-duration="2000">
            <h2 class="mt-5 fw-bold kipung" >FORM PENDAFTARAN SISWA</h2>
            <h3 class="fw-bold kipung">UNIVERSITAS GUNADARMA</h2>
          </div>
        </div>





<br/>

<br/>
<hr COLOR=gold WIDTH=100%>
</div>
</header>
<form action="" method="POST" class="form">
<table align="center">
<td>
<a href="form_login.php">Logout</a>
<h3>Data Pribadi</h3></td>
<tr>
<td>Nama</td>
<td>:</td>
<td><input type="tel" name="nama" required=""></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input type="text" name="email" required=""></td>
</tr>
<tr>
<td>Nomor HP</td>
<td>:</td>
<td><input type="text" name="no_hp" required=""></td>
</tr>

<tr>
<td>Tempat, Tanggal Lahir</td>
<td>:</td>
<td><input type="text" name="tempat" required="">
<input type="date" name="tanggal"></td>
<tr>

</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><textarea name="alamat" required=""></textarea></td>
</tr>
<tr>
<td>Asal Sekolah</td>
<td>:</td>
<td><input type="text" name="asal_sekolah" required=""></td>
</tr>


<tr>
<td>Foto Pass</td><td>:</td>
<td><input name="foto" type="file"></td>
</tr>
<td>
<h3>Anggota Keluarga</h3>
</td>
<tr>
<td>Nama Orang Tua</td>
<td>:</td>
<td><input type="text" name="nama_keluarga">
</td>
</tr>
<tr>
<td>Nomor Hp Orangtua</td>
<td>:</td>
<td><input type="text" name="telepon_orangtua"></td>
</tr>
<tr></tr>
<td>Alamat Orang Tua</td>
<td>:</td>
<td><textarea name="alamat_orangtua" required=""></textarea></td>
</tr>
<td>
<h3>Jurusan</h3>
</td>
<tr><td>Jurusan</td><td>:</td><td><select name="jurusan" required="">
<option>--Pilih Jurusan--</option>
<option>Falkutas Ilmu Komunikasi Teknologi Informasi</option>
<option>Fakultas Ekonomi</option>
<option>Fakultas Ilmu Komunikasi</option>


</select></td></tr>

<td>
<h3>Progam Studi</h3>
</td>
<tr><td>Program Studi</td><td>:</td><td><select name="program_studi" required="">
<option>--Pilih Program Studi--</option>
<option>Sistem Informasi</option>
<option>Sistem Komputer</option>
<option>Teknologi Informatika</option>
<option>Management</option>
<option>Akuntansi</option>
<option>Ilmu Komunikasi</option>


</select></td></tr>

<tr>


<td></td>
<td>
<td><input name ="simpan" type="submit" value="SIMPAN" class="mt-5">

<input sname="hapus" type="reset" value="HAPUS" class="mt-5"></td>
</tr>
</table>
</form>
</body>
</html>




</body>
</html>







<?php
include "koneksi.php";

if(isset($_POST['simpan'])){
    mysqli_query($koneksi,"insert into daftar_mahasiswa set
    nama =  '$_POST[nama]',
    email =  '$_POST[email]',
    no_hp =  '$_POST[no_hp]',
    tempat =  '$_POST[tempat]',
    tanggal =  '$_POST[tanggal]',
    alamat =  '$_POST[alamat]',
    asal_sekolah =  '$_POST[asal_sekolah]',
    foto =  '$_POST[foto]',
    nama_keluarga =  '$_POST[nama_keluarga]',
    telepon_orangtua =  '$_POST[telepon_orangtua]',
    alamat_orangtua =  '$_POST[alamat_orangtua]',
    jurusan =  '$_POST[jurusan]',
    program_studi =  '$_POST[program_studi]'");

    echo"<script>alert('TERIMAKASIH SUDAH MENGISI FORM , DATA ANDA TELAH TERSIMPAN');window.location='index.php'</script>";}
?>