<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$posisi_lamar = $_POST['posisi_lamar'];

// Upload CV
$cv = $_FILES['cv_file']['name'];
$tmp = $_FILES['cv_file']['tmp_name'];
$upload_path = "uploads/" . basename($cv);
move_uploaded_file($tmp, $upload_path);

// Simpan ke database
$sql = "INSERT INTO lamaran (nama, email, no_hp, alamat, posisi_lamar, cv_file)
        VALUES ('$nama', '$email', '$no_hp', '$alamat', '$posisi_lamar', '$upload_path')";

if (mysqli_query($conn, $sql)) {
    echo "Lamaran berhasil dikirim.";
} else {
    echo "Gagal menyimpan lamaran: " . mysqli_error($conn);
}
?>
