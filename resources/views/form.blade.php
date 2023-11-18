<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <div class="col-sm-6">
        <h4>Form Mahasiswa</h4>
        <form action="" method="POST">
          <div class="row">
            <div class="col-sm-4">
              <label for="">KODE-PRODUK</label>
              <input type="number" name="npm" class="form-control" placeholder="Input NPM">
            </div>
            <div class="col-sm-4">
              <label for="">Nama PRODUK</label>
              <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Input Nama Mahasiswa">
            </div>
            <div class="col-sm-4">
                <label for="">Jenis Produk</label>
                <select name="prodi" class="form-control">
                    <option>PILIH PRODUK</option>
                    <option>ALAT TULIS</option>
                    <option>ELEKTRONIK</option>
                    <option>SEMBAKO</option>
                  </select>
              </div>
          </div>
          <div class="row">
            
            <div class="col-sm-6">
              <label for="">Harga</label>
              <input type="text" name="harga" class="form-control" placeholder="harga">
            </div>
            <div class="col-sm-6">
              <div class="row mt-4">
                <div class="col-sm-12">
                  <div class="form-group">
                    <button class="btn btn-success " type="submit" style="width: 100%">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>