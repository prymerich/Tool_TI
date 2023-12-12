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

            $idmobil      = input($_POST["id_mobil"]);
            $mobil        = input($_POST["nama_mobil"]);
            $total        = input($_POST["harga"]);
            $status    = input($_POST["status"]);

            

            $sql    ="INSERT INTO mobil (id_mobil, nama_mobil, total_harga, status) VALUES ('$idmobil', '$mobil', '$total', '$status')";
            $hasil = mysqli_query($konek, $sql);

            if ($hasil) {
                header("Location: mobil.php");
            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal Disimpan. </div>";
    
            }
        }
        ?>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <div class="col-10 m-auto" style="padding: 100px 0px 0 0 0;">
        <h2 class="text-center fw-bold mt-5">Tambah Data Mobil Sewa</h2>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama</label>
            <input name="Nama" type="text" class="form-control" id="exampleFormControlinput1" placeholder="ex : Toyota Vios" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga per Hari</label>
            <input name="umur" type="text" class="form-control" id="exampleFormControlinput1" placeholder="200000">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">status</label>
            <input name="umur" type="text" class="form-control" id="exampleFormControlinput1" placeholder="baik/reparasi/buruk">
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