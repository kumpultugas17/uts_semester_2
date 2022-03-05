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
    <div class="card">
      <div class="card-header">
        <div class="card-title">Edit Siswa</div>
      </div>
      <div class="card-body">
        <?php
        if (isset($_GET['id'])) {
          include 'koneksi.php';
          $id = $_GET['id'];

          $query = $koneksi->query("SELECT * FROM siswa WHERE id='$id'");
          $data = mysqli_fetch_assoc($query);
        }
        ?>
        <form action="update_siswa.php" method="post">
          <input type="hidden" name="id" value="<?= $id; ?>">
          <div class="mb-3">
            <label for="">NIS</label>
            <input type="text" class="form-control" name="nis" value="<?= $data['nis'] ?>">
          </div>
          <div class="mb-3">
            <label for="">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>">
          </div>
          <div class="mb-3">
            <label for="">Kelas</label>
            <input type="text" class="form-control" name="kelas" value="<?= $data['kelas'] ?>">
          </div>
          <div class="mb-3">
            <label for="">Jenis Kelamin</label>
            <select name="jk" id="" class="form-select">
              <option selected disabled>Pilih Jenis Kelamin</option>
              <option value="l" <?= $data['jk'] == 'l' ? 'selected' : ''; ?>>Laki-laki</option>
              <option value="p" <?= $data['jk'] == 'p' ? 'selected' : ''; ?>>Perempuan</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="">Alamat</label>
            <textarea class="form-control" name="alamat" rows="4"><?= $data['alamat']; ?></textarea>
          </div>
          <button type="submit" name="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>