<?php
//Jika nanti mau aktifkan session, tinggal buka ini:
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Beranda - Lowongan Kerja</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container">
    <h1>PT. WIRAPRAATAMA<br>
        <small>by Ani Marlita</small></h1>
    <p>
      <a href="register.php">Registrasi</a> | 
      <a href="login.php">Login</a>
    </p>
  </div>
</body>
</html>
