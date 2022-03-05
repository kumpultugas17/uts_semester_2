<?php
if (isset($_POST['submit'])) {
  include 'koneksi.php';
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];

  $koneksi->query("UPDATE siswa SET nama = '$nama', kelas='$kelas', jk='$jk', alamat='$alamat' WHERE id = '$id'");

  header('Location:data_siswa.php?msg=sukses_update');
}
