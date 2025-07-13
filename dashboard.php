<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pelamar</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome (icon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f1f5f9;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #1c2b36;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            padding: 30px 20px;
        }

        .sidebar h4 {
            margin-bottom: 20px;
            text-align: center;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background-color: #343f4a;
        }

        .main {
            margin-left: 250px;
            padding: 30px;
        }

        .card {
            border: none;
            border-radius: 10px;
            color: white;
        }

        .bg-blue { background-color: #007bff; }
        .bg-green { background-color: #28a745; }
        .bg-yellow { background-color: #ffc107; }

        .chart-box {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .chart-box h5 {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4><?php echo $_SESSION['nama_lengkap']; ?></h4>
        <p class="text-center text-muted small">Pelamar</p>
        <hr>
        <a href="#"><i class="fa fa-home me-2"></i> Dashboard</a>
        <a href="register.php"><i class="fa fa-users me-2"></i> Register </a>
        <a href="#"><i class="fa fa-file-alt me-2"></i> Laporan</a>
        <a href="logout.php"><i class="fa fa-sign-out-alt me-2"></i> Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main">
        <h2>Dashboard</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card bg-yellow p-3">
                    <h5>Total Lamaran</h5>
                    <p class="fs-3">52</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-green p-3">
                    <h5>Diterima</h5>
                    <p class="fs-3">34</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-blue p-3">
                    <h5>Ditolak</h5>
                    <p class="fs-3">18</p>
                </div>
            </div>
        </div>

        <div class="row chart-box">
            <div class="col-md-6">
                <h5>Statistik Lamaran (Bar)</h5>
                <canvas id="barChart"></canvas>
            </div>
            <div class="col-md-6">
                <h5>Persentase Status (Pie)</h5>
                <canvas id="pieChart"></canvas>
            </div>
        </div>
    </div>

    <script>
        const barChart = new Chart(document.getElementById('barChart'), {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei'],
                datasets: [{
                    label: 'Lamaran Masuk',
                    data: [5, 8, 6, 10, 12],
                    backgroundColor: '#007bff'
                }]
            }
        });

        const pieChart = new Chart(document.getElementById('pieChart'), {
            type: 'pie',
            data: {
                labels: ['Diterima', 'Ditolak'],
                datasets: [{
                    data: [34, 18],
                    backgroundColor: ['#28a745', '#dc3545']
                }]
            }
        });
    </script>
</body>
</html>
