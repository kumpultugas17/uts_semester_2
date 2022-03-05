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
        <div class="card-title">Tambah Nilai</div>
      </div>
      <div class="card-body">
        <form action="act_nilai.php" method="post">
          <div class="mb-3">
            <label for="">NIS</label>
            <select name="nis" id="select-nis" class="form-select">
              <option selected disabled>Pilih NIS</option>
              <?php
              include 'koneksi.php';
              $query = $koneksi->query("SELECT * FROM siswa");
              foreach ($query as $data) :
              ?>
                <option data-nama="<?= $data['nama']; ?>" data-kelas="<?= $data['kelas']; ?>" value="<?= $data['id']; ?>"><?= $data['nis']; ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="">Nama Lengkap</label>
            <input type="text" id="nama" class="form-control" name="nama">
          </div>
          <div class="mb-3">
            <label for="">Kelas</label>
            <input type="text" id="kelas" class="form-control" name="kelas">
          </div>
          <div class="mb-3">
            <label for="">Mata Kuliah</label>
            <input type="text" id="kelas" class="form-control" name="mata_kuliah">
          </div>
          <div class="mb-3">
            <label for="">Nilai Tugas</label>
            <input type="number" class="form-control" name="tugas">
          </div>
          <div class="mb-3">
            <label for="">Nilai UTS</label>
            <input type="number" class="form-control" name="uts">
          </div>
          <div class="mb-3">
            <label for="">Nilai UAS</label>
            <input type="number" class="form-control" name="uas">
          </div>
          <button type="submit" name="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="jQuery.js"></script>

  <script>
    $('#select-nis').on('change', function() {
      const nama = $('#select-nis option:selected').data('nama');
      const kelas = $('#select-nis option:selected').data('kelas');

      $('#nama').val(nama);
      $('#kelas').val(kelas);
    });
  </script>
</body>

</html>