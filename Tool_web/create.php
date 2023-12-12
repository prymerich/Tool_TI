<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mengisi Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php
        include("koneksi.php");

        function input($data) {
            $data   = trim($data);
            $data   = stripslashes($data);
            $data   = htmlspecialchars($data);
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nama          = input($_POST["Nama"]);
            $jenis_kelamin = input($_POST["Jenis_Kelamin"]);
            $alamat        = input($_POST["Alamat"]);
            $email         = input($_POST["Email"]);
            $nohp          = input($_POST["No_HP"]);

            

            $sql    ="INSERT INTO pegawai (Nama, Jenis_Kelamin, Alamat, Email, No_HP) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$email', '$nohp')";
            $hasil = mysqli_query($konek, $sql);

            if ($hasil) {
                header("Location:index.php");
            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal Disimpan. </div>";
    
            }
        }
        ?>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <div class="col-10 m-auto" style="padding: 100px 0px 0 0 0;">
        <h2 class="text-center fw-bold mt-5">Tambah Data Pegawai</h2>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ID</label>
            <input name="ID" type="text" class="form-control" id="exampleFormControlinput1" placeholder="Maks. 10 Digit" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input name="Nama" type="text" class="form-control" id="exampleFormControlinput1" placeholder="ex : Richad Krishna" required>
        </div>
        <div class="mb-3">
            <p>Jenis Kelamin</p>
            <input name="Jenis Kelamin" type="radio" id="gender1input" value="Laki-laki" required>
            <label for="gender1input" class="form-label">Laki-Laki</label>
            <br>
            <input name="Jenis Kelamin" type="radio" id="gender1input" value="Perempuan" required>
            <label for="gender1input" class="form-label">Perempuan</label>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <textarea name="Alamat" class="form-control" id="exampleFormControlinput1" placeholder="Masukkan Alamat" required></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input name="Email" type="text" class="form-control" id="exampleFormControlinput1" placeholder="contoh@gmail.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">No HP</label>
            <input name="No HP" type="text" class="form-control" id="exampleFormControlinput1" placeholder="contoh : 0817485247">
        </div>
        
        <div class="d-grid gap-2 col-9 mx-auto">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
            <button class="btn btn-md btn-primary px-5 mt-5 mb-5"><h5>Simpan</h5></button>
        </div><br>
    </div>
    </form>
</div>
  
  







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"    crossorigin="anonymous"></script>
  </body>
</html>