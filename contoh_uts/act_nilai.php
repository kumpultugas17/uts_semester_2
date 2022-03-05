<?php
if (isset($_POST['submit'])) {
  include 'koneksi.php';
  $nis = $_POST['nis'];
  $mata_kuliah = $_POST['mata_kuliah'];
  $tugas = $_POST['tugas'];
  $uts = $_POST['uts'];
  $uas = $_POST['uas'];

  $koneksi->query("INSERT INTO nilai (siswa_id, mata_kuliah, tugas, uts, uas) VALUES ('$nis', '$mata_kuliah', '$tugas', '$uts', '$uas')");

  header('Location:data_nilai.php?msg=sukses_tambah');
}
