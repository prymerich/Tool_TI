<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="my-4">Daftar Transaksi</h2>

        <!-- Tabel untuk Menampilkan Daftar Transaksi -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Tanggal Transaksi</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data Transaksi akan ditampilkan di sini (gunakan PHP untuk mengambil data dari database) -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>2023-01-01</td>
                    <td>$100</td>
                    <td>
                        <a href="#" class="btn btn-info mb-2">Detail</a>
                        <a href="#" class="btn btn-danger mb-2">Hapus</a>
                    </td>
                </tr>
                <!-- Akhir dari data yang diambil dari database -->
            </tbody>
        </table>

        <h2 class="my-4">Tambah Transaksi</h2>

        <!-- Formulir untuk Menambah Transaksi -->
        <form action="#" method="post">
            <div class="mb-3">
                <label for="namaPelanggan" class="form-label">Nama Pelanggan:</label>
                <input type="text" class="form-control" id="namaPelanggan" name="namaPelanggan" required>
            </div>
            <div class="mb-3">
                <label for="tanggalTransaksi" class="form-label">Tanggal Transaksi:</label>
                <input type="date" class="form-control" id="tanggalTransaksi" name="tanggalTransaksi" required>
            </div>
            <div class="mb-3">
                <label for="totalHarga" class="form-label">Total Harga:</label>
                <input type="number" class="form-control" id="totalHarga" name="totalHarga" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Transaksi</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
