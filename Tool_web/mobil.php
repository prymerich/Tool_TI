<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $stmt = $konek->prepare("DELETE FROM mobil WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("location: mobil.php");
    } else {
        echo "<div class='alert alert-danger'> Data Gagal Dihapus.</div>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabel Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-1 h1">Rental-Kun</span>
    </nav>
    <div class="container-fluid">
        <br>
        <h1 class="text-center fw-bold">Data Mobil Sewa</h1>

        <a href="create2.php" class="btn btn-primary" role="button">+ Tambah</a>
        <table class="my-3 table table-bordered table-hover">
    <thead>
        <tr class="table-primary table-bordered">
            <th class="text-center">No</th>
            <th class="text-center">ID Mobil</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Harga</th>
            <th class="text-center">Status</th>
            <th class="text-center" colspan='2'>Aksi</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $sql = "SELECT * FROM mobil";
    $hasil = mysqli_query($konek, $sql) or die(mysqli_error($konek));

    $no     = 0;
    while ($data = mysqli_fetch_array($hasil)) {
        $no++;
    ?>
        <tr> 
            <td><?php echo $no; ?></td>         
            <td><?php echo $data["id_mobil"]; ?></td>
            <td><?php echo $data["nama_mobil"]; ?></td>
            <td><?php echo $data["harga"]; ?></td>
            <td><?php echo $data["status"]; ?></td>
            <td>
                <a href="update3.php?id=<?= htmlspecialchars($data['id']); ?>" class="btn btn-outline-warning" role="button">Edit</a>
                <a href="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?= htmlspecialchars($data['id']); ?>" class="btn btn-danger" role="button" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>

    </tbody>
</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
