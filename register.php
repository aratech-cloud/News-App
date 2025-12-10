<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    u { color: blue; font-weight: bold; }
    span { color: red; }
</style>
<body>
    <div class="container text-center mt-5">
        <img src="https://placehold.co/300x300" alt="gambar">
    </div>
    <div class="container mt-5 text-center text-bold">
        <h2>Register <u>Akun!</u></h2>
    </div>
    <form class="container mt-5" action="register.php" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Username <span>*</span></label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address <span>*</span></label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password <span>*</span></label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="confirmation_password" class="form-label">Confirmation Password <span>*</span></label>
            <input type="password" class="form-control" id="confirmation_password" name="confirmation_password" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Register</button>
        <p class="mt-5">Already have an account? <a href="login.php">Login</a></p>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmation_password = $_POST['confirmation_password'];

    if ($password != $confirmation_password) {
        echo "Password dan Konfirmasi Password tidak sama!";
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email sudah terdaftar!";
    } else {
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            echo "Registrasi berhasil! Silakan <a href='login.php'>login</a>.";
        } else {
            echo "Terjadi kesalahan. Silakan coba lagi.";
        }
    }
}
?>
