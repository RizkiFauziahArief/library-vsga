<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Nilai Mahasiswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Program Menghitung Nilai Mata Kuliah</a>
    </nav>
  </header>

  <div class="container">
    <div class="row mt-4 align-items-center">
      <div class="col-md-4">
          <div class="text-center">
              <img src="images/profil.png" alt="Foto Profil" class="img-fluid">
          </div><br>
          <h4 class="text-center">Rizki Fauziah Arief</h4>
          <h5 class="text-center">Junior Web Development</h5>
      </div>
      <div class="col-md-8 mt-2">
        <h2>Data Nilai Mahasiswa</h2><br>
        <form action="outputkhs.php" method="post">
          <div class="form-group">
            <label for="nama">Nama :</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
          </div>
          <div class="form-group">
            <label for="matkul">Mata kuliah :</label>
            <input type="text" class="form-control" name="matkul" placeholder="Masukkan Mata Kuliah">
          </div>
          <div class="form-group">
          <label for="kelas">Kelas :</label>
            <select class="form-control" name="kelas">
              <option value="VSGA 1A">VSGA 1A</option>
              <option value="VSGA 1B">VSGA 1B</option>
              <option value="VSGA 1C">VSGA 1C</option>
              <option value="VSGA 1D">VSGA 1D</option>
              <option value="VSGA 1E">VSGA 1E</option>
            </select>
          </div>
          <div class="form-group">
            <label for="uts">Nilai Tugas :</label>
            <input type="number" class="form-control" name="ttugas" placeholder="Masukkan Nilai Tugas">
          </div>
          <div class="form-group">
            <label for="uts">Nilai UTS :</label>
            <input type="number" class="form-control" name="tuts" placeholder="Masukkan Nilai UTS">
          </div>
          <div class="form-group">
            <label for="uas">Nilai UAS :</label>
            <input type="number" class="form-control" name="tuas" placeholder="Masukkan Nilai UAS">
          </div><br>
          <button type="submit" class="btn btn-primary" value="submit" name="bok">Submit</button>
          <button type="reset" class="btn btn-danger" value="batal">Reset</button>
        </form>
      </div>
    </div>

    <footer class="mt-5 text-center">
      <p>&copy; 2023 By Rizki Fauziah Arief</p>
    </footer>

  </div>
</body>
</html>
