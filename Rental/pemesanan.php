<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <!-- CSS UNTUK FORM -->
    <link rel="stylesheet" href="styles2.css">

    <!-- CSS UNTUK HOME DAN FOOTER -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- FORM PEMESANAN CUSTOMER -->
    <div class="container">
        <div class="title">Form Pemesanan</div>
        <div class="content">
            <form action="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nama Lengkap</span>
                        <input type="text" placeholder="Masukan Nama Lengkap (Sesuai KTP)">
                    </div>
                    <div class="input-box">
                        <span class="details">Alamat</span>
                        <input type="text" placeholder="Alamat Lengkap (Sesuai KTP)">
                    </div>
                    <div class="input-box">
                        <span class="details">Lama Peminjaman</span>
                        <input type="text" placeholder="contoh : 2 hari">
                    </div>
                    <div class="input-box">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Mobil yang diinginkan</option>
                            <option value="1">Toyota Vias</option>
                            <option value="2">Sonet</option>
                            <option value="3">Toyota Yaris</option>
                            <option value="4">Toyota Rush</option>
                            <option value="5">Toyota Alphard</option>
                            <option value="6">Daihatsu Alya</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Nomor Telepon</span>
                        <input type="text" placeholder="cth: 089625376527">
                    </div>
                    <div>
                        <h2>Upload KTP</h2>
                        <label for="gambar">Pilih Gambar:</label>
                        <input type="file" name="gambar" id="gambar" accept="image/*">
                        <br>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Pesan">
                </div>
            </form>

        </div>
    </div>

</body>

</html>