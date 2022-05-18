
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
        <h2 class="alert alert-primary text-center mt-3">FORMULIR PENDAFTARAN PMR
            WIRA
        </h2>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PMR Indonesia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Readme.md</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
        <form action="simpan-barang.php" method="post">
           <div class="form-group">
                    <label>Nama Lengkap:</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Lengkap" >
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="TempatLahir">Tempat Lahir:</label>
                            <input type="text" name="tempat" id="tempat" class="form-control" placeholder="Masukan Nama Lengkap" id="TempatLahir">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="TanggalLahir">Tanggal Lahir:</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control" id="TanggalLahir">
                        </div>
                    </div>
                </div>
                

                

                <div class="form-group">
                    <label>Nama Orang Tua/Wali:</label>
                    <input type="text" name="orang" id="orang" class="form-control" placeholder="Masukan Nama Lengkap">
                </div>

                <div class="form-group">
                    <label>Pekerjaan Orang Tua Wali:</label>
                    <input type="text" name="pkrj" id="pkrj" class="form-control" placeholder="Masukan Nama Lengkap">
                </div>

                <div class="form-group">
                    <label>Alamat Rumah:</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Nama Lengkap">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="TempatLahir">Anak Ke:</label>
                            <input type="text" name="anak" id="anak" class="form-control" placeholder="Masukan Nama Lengkap" id="TempatLahir">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="TanggalLahir">Dari Bersaudara :</label>
                            <input type="text" name="bersaudara" id="bersaudara" class="form-control" id="TanggalLahir">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Golongan dara:</label>
                        <input type="text" name="goldar" id="goldar" class="form-control" placeholder="Masukan Nama Lengkap">
                    </div>

                    <div class="form-group">
                        <label>Sekolah di:</label>
                        <input type="text" name="sekolah" id="sekolah" class="form-control" placeholder="Masukan Nama Lengkap">
                    </div>

                    <div class="form-group">
                        <label>Bakat dan hobby:</label>
                        <input type="text" name="bakat" id="bakat" class="form-control" placeholder="Masukan Nama Lengkap">
                    </div>

                    <div class="form-group">
                        <label>Hal-hal yang perlu diperhatikan: <br>
                            (Kebiasaan, Kesehatan, Bahasa yang disukai dan lain - lain)
                        </label>
                        <textarea class="form-control" name="hal" id="hal" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label>Pengalaman Organisasi :</label>
                    <textarea class="form-control" name="organisasi" id="organisasi" rows="3"></textarea>

                </div>

                <div class="custom-control custom-checkbox-left">
                    <input type="checkbox" class="custom-control-input" name="customCheck1" id="customCheck1">
                    <label onclick="myFunction()" class="custom-control-label" for="customCheck1">Menyetujui Orang Tua/Wali</label>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                </div>
                




           </div>
        </form>
    </div>

    <script>
function myFunction() {
  alert("Dengan ini saya menerima segala peraturan yang berlaku di organisasi PMR");
}
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>