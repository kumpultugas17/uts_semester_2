<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <?php include '_navbar.php'; ?>

  <div class="container mt-3">
    <a href="tambah_siswa.php" class="btn btn-sm btn-primary mb-2 float-end">Tambah Siswa</a>
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th class="text-center">#</th>
          <th>NIS</th>
          <th>Nama Lengkap</th>
          <th class="text-center">Kelas</th>
          <th class="text-center">Jenis Kelamin</th>
          <th width="150px" class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'koneksi.php';
        $no = 1;
        $query = $koneksi->query("SELECT * FROM siswa");
        foreach ($query as $row) {
        ?>
          <tr>
            <td class="text-center"><?= $no++; ?></td>
            <td><?= $row['nis'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td class="text-center"><?= $row['kelas'] ?></td>
            <td class="text-center"><?= $row['jk'] === 'l' ? 'Laki-laki' : 'Perempuan'; ?></td>
            <td class="text-center">
              <a href="edit_siswa.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
              <a href="hapus_siswa.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<?php if (isset($_GET['msg']) && $_GET['msg'] == 'sukses_tambah') { ?>
  <script>
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Data baru berhasil ditambahkan!',
      showConfirmButton: false,
      timer: 2000
    })
  </script>
<?php } ?>

</html>