<!DOCTYPE html>
<html>
<head>
    <title>Formulir Lamaran Kerja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Formulir Lamaran Kerja</h2>
    <form action="simpan_lamaran.php" method="POST" enctype="multipart/form-data">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>No. HP:</label><br>
        <input type="text" name="no_hp" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>

        <label>Posisi yang Dilamar:</label><br>
        <input type="text" name="posisi_lamar" required><br><br>

        <label>Upload CV (PDF):</label><br>
        <input type="file" name="cv_file" accept=".pdf" required><br><br>

        <input type="submit" value="Kirim Lamaran">
    </form>
</body>
</html>
