<!-- note : apapun yang berada di kurungan "<?php   ?>" itu mu ubah sesuaiin ama database -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabel Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style4.css">

  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-1 h1">Rental-Kun</span>
    </nav>
    <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark text-white" id="sidebar">
        <div class="sidebar-heading">Rental-Kun</div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action">Dashboard</a>
            <a href="#submenu1" class="list-group-item list-group-item-action" data-bs-toggle="collapse">Master Data</a>
            <div class="collapse" id="submenu1">
                <a href="customer.php" class="list-group-item list-group-item-action pl-3">Customer</a>
                <a href="index.php" class="list-group-item list-group-item-action pl-3">Pegawai</a>
            </div>
            <a href="#submenu2" class="list-group-item list-group-item-action" data-bs-toggle="collapse">Transaksi</a>
            <div class="collapse" id="submenu2">
                <a href="barang.php" class="list-group-item list-group-item-action pl-3">Barang</a>
            </div>
        </div>
    </div>
    <!-- /#sidebar -->

    <!-- Page content wrapper -->
    <div id="page-content-wrapper">

        <!-- Toggle button -->
        <button class="btn btn-dark" id="sidebarToggle" onclick="toggleSidebar()">Toggle Sidebar</button>

        <!-- Main content -->
        <div class="container-fluid">
            <h1 class="mt-4">Main Content</h1>
            <!-- Add your page content here -->
        </div>
        <!-- /Main content -->
    </div>
    <!-- /Page content wrapper -->

</div>
<div class="container">
    <br>
    <h1 class="text-center fw-bold">Daftar Nama Pegawai</h1>
    <h2 class="text-center fw-bold">Angkatan 2023</h2>
<?php
    include "koneksi.php";

    if (isset($_GET['id'])){
        $id=htmlspecialchars($_GET["id"]);

        $del    = "DELETE from pegawai where id='$id' ";
        $delete  = mysqli_query($konek, $del);

        if ($delete){
            header("location:index.php");
        }
        else{
            echo "<div class='alert alert-danger'> Data Gagal Dihapus.</div>";
        }
    }
?>
    <!-- <tr class="table-danger">
      <br>
    </tr> -->
<div class="container-fluid">
    <a href="create.php" class="btn btn-primary" role="button">+ Tambah</a>
    <table class="my-3 table table-bordered table-hover">
        <thead>
        <tr class="table-primary table-bordered">
            <th class="text-center">No</th>
            <th class="text-center">ID Pegawai</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">Email</th>
            <th class="text-center">No HP</th>
            <th class="text-center" colspan='2'>Aksi</th>
        </tr>
        </thead>

        <?php
        include "koneksi.php";
        $sql = "SELECT * FROM pegawai";

        $hasil  = mysqli_query($konek, $sql);
        $no     = 0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
        <tbody>
        <tr> 
            <!-- ini perlu disesuaiin -->
            <td><?php echo $no; ?></td>
            <td><?php echo $data["id"]; ?></td>
            <td><?php echo $data["Nama"]; ?></td>
            <td><?php echo $data["Jenis_Kelamin"]; ?></td>
            <td><?php echo $data["Alamat"]; ?></td>
            <td><?php echo $data["Email"]; ?></td>
            <td><?php echo $data["No_HP"]; ?></td>
            <td>
                <a href="update.php?id=<?php echo htmlspecialchars($data['id']); ?>" class="btn btn-outline-warning" role="button">Edit</a>
                <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?php echo htmlspecialchars($data['id']); ?>" class="btn btn-danger" role="button" onclick="return confir('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
            </td>
        </tr>
        </tbody>

        <?php
        }
        ?>
    </table>
    </div>
</div>

          





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"    crossorigin="anonymous"></script>
    <script>
    // fungsi toogle sidebarnya
    function toggleSidebar() {
        const wrapper = document.getElementById('wrapper');
        wrapper.classList.toggle('toggled');
    }

    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>