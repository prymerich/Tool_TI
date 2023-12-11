<?php
include "koneksi.php";

function isUserLoggedIn()
{
    return isset($_SESSION['username']);
}

if (isUserLoggedIn()) {
    header("Location: customer.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST["action"];

    if ($action == "signup") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Validate password length
        if (strlen($password) < 8 || strlen($password) > 20) {
            $error_message = "Password harus antara 8 dan 20 karakter.";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Use prepared statement to prevent SQL injection
            $stmt = $konek->prepare("INSERT INTO signup (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hashed_password);

            if ($stmt->execute()) {
                $success_message = "Pendaftaran berhasil. Silakan login.";
            } else {
                $error_message = "Gagal mendaftar. Silakan coba lagi.";
            }

            $stmt->close();
        }
    } elseif ($action == "login") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $stmt = $konek->prepare("SELECT * FROM signup WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();

            if (password_verify($password, $row["password"])) {
                // Login successful
                header("Location: index.php");
                exit();
            } else {
                $error_message = "Password salah. Silakan coba lagi.";
            }
        } else {
            $error_message = "Akun tidak ditemukan. Silakan daftar terlebih dahulu.";
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image mb-3">
                    <img src="mobil.jpeg" class="img-fluid rounded-4 mt-2" style="width: 500px;">
                </div>
            </div>

            <!-------------------------- Right Box ---------------------------->
            <form action="" method="post">
                <div class="col-md-6 right-box">
                    <div class="row align-items-center">
                        <div class="header-text mb-4">
                            <img src="logo.png" style="width:100px" class="me-2 mb-3 float-end">
                            <h2>RENTAL-KUN</h2>
                            <p>Tempat Untuk Menyewa Berbagai Mobil</p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" name="username">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="password">
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="text m-auto mb-5">
                                <small>Password harus 8-20 karakter</small>
                            </div>
                            <?php
                            if (isset($error_message)) {
                                echo "<p style='color: red;'>$error_message</p>";
                            } elseif (isset($success_message)) {
                                echo "<p style='color: green;'>$success_message</p>";
                            }
                            ?>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-outline-success w-100 fs-6" type="submit" name="action" value="login">Login</button>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6" type="submit" name="action" value="signup">Register</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>

    </div>

</body>

</html>
