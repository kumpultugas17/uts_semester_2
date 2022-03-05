<?php
if (isset($_POST['submit'])) {
  include 'koneksi.php';
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];

  $koneksi->query("INSERT INTO siswa (nis, nama, kelas, jk, alamat) VALUES ('$nis', '$nama', '$kelas', '$jk', '$alamat')");

  header('Location:data_siswa.php?msg=sukses_tambah');
}
