<?php
include("koneksi.php");

function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_GET['id'])){
    $id     = input($_GET["id_mobil"]);

    $sql    = "SELECT * FROM mobil WHERE id='$id' ";
    $hasil  = mysqli_query($konek, $sql);
    $data   = mysqli_fetch_assoc($hasil);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_mobil    = input($_POST["id_mobil"]);
    $nama_mobil  = input($_POST["nama_mobil"]);
    $harga       = input($_POST["harga"]);
    $status      = input($_POST["status"]);

    $sql = "UPDATE mobil SET
        id_mobil = '$id_mobil',
        nama_mobil = '$nama_mobil',
        harga = '$harga',
        status = '$status'
        WHERE id = '$id'";

    $hasil = mysqli_query($konek, $sql);

    if ($hasil) {
        header("Location: mobil.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'> Data Gagal Disimpan. </div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Mobil Sewa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="col-10 m-auto" style="padding: 100px 0px 0 0 0;">
                <h2 class="text-center fw-bold mt-5">Ubah Mobil Sewa</h2>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ID Mobil</label>
                    <input name="id_mobil" type="text" class="form-control" id="exampleFormControlinput1"readonly>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
                    <input name="nama_mobil" type="text" class="form-control" id="exampleFormControlinput1" required>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Harga</label>
                    <input name="harga" type="text" class="form-control" id="exampleFormControlinput1"required>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Status</label>
                    <input name="status" type="text" class="form-control" id="exampleFormControlinput1"required>
                </div>

                <div class="d-grid gap-2 col-9 mx-auto">
                    <input type="hidden" name="id" />
                    <button class="btn btn-md btn-warning px-5 mt-5 mb-5">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
