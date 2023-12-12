<!doctype html>
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
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_GET['id'])){
    $id     = input($_GET["id"]);

    $sql    = "SELECT * FROM customer WHERE id='$id' ";
    $hasil  = mysqli_query($konek, $sql);
    $data   = mysqli_fetch_assoc($hasil);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id            = htmlspecialchars($_POST["id"]);
    $nama          = htmlspecialchars($_POST["Nama"]);
    $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
    $lahir         = htmlspecialchars($_POST["tgl_lahir"]);
    $umur          = htmlspecialchars($_POST["umur"]);
    $alamat        = htmlspecialchars($_POST["Alamat"]);
    $email         = htmlspecialchars($_POST["Email"]);
    $nohp          = htmlspecialchars($_POST["No_hp"]);

    $sql = "UPDATE customer SET
        Nama='$nama',
        jenis_kelamin='$jenis_kelamin',
        tgl_lahir='$lahir',
        umur='$umur',
        Alamat='$alamat',
        Email='$email',
        No_hp='$nohp'
        WHERE id='$id'";

    $hasil = mysqli_query($konek, $sql);

    if ($hasil) {
        header("Location: customer.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'> Data Gagal Disimpan. </div>";
    }
}
?>

<!-- ... (formulir dan HTML lainnya) ... -->


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="col-10 m-auto" style="padding: 100px 0px 0 0 0;">
        <h2 class="text-center fw-bold mt-5">Ubah Data Pelanggan</h2>
        <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">ID</label>
    <input name="ID" type="text" class="form-control" id="exampleFormControlinput1" value="<?php echo $data['id']; ?>" readonly>
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama</label>
    <input name="Nama" type="text" class="form-control" id="exampleFormControlinput1" placeholder="<?php echo $data["Nama"]; ?>" required>
</div>
<div class="mb-3">
    <p>Jenis Kelamin</p>
    <input name="jenis_kelamin" type="radio" id="gender1input" value="Laki-laki" required>
    <label for="gender1input" class="form-label">Laki-Laki</label>
    <br>
    <input name="jenis_kelamin" type="radio" id="gender2input" value="Perempuan" required>
    <label for="gender2input" class="form-label">Perempuan</label>
</div>
<div class="mb-3">
    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Umur</label>
    <input name="umur" type="text" class="form-control" id="exampleFormControlinput1" placeholder="<?php echo $data["umur"]; ?>" required>
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
    <textarea name="Alamat" class="form-control" id="exampleFormControlinput1" placeholder="<?php echo $data["Alamat"]; ?>" required></textarea>
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input name="Email" type="text" class="form-control" id="exampleFormControlinput1" placeholder="<?php echo $data["Email"]; ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">No HP</label>
    <input name="No_Hp" type="text" class="form-control" id="exampleFormControlinput1" placeholder="<?php echo $data["No_hp"]; ?>">
</div>
<div class="d-grid gap-2 col-9 mx-auto">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
    <button class="btn btn-md btn-warning px-5 mt-5 mb-5">Simpan</button>
</div>
            
    </form>
    </div>

  
  







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"    crossorigin="anonymous"></script>
  </body>
</html>