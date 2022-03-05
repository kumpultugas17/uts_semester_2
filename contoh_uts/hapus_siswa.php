<?php
if (isset($_GET['id'])) {
  include 'koneksi.php';
  $id = $_GET['id'];

  $koneksi->query("DELETE FROM siswa WHERE id = '$id'");

  header('Location:data_siswa.php?msg=sukses_hapus');
}
