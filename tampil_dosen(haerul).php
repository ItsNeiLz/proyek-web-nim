<?php
// Menghubungkan ke database menggunakan file koneksi yang sudah ada
require_once 'koneksi.php';

// Mengambil data dari tabel dosen (pastikan tabel dosen sudah dibuat di database kampus_db)
$query = "SELECT * FROM dosen";
$result = false;
try {
    $result = mysqli_query($conn, $query);
} catch (mysqli_sql_exception $e) {
    // Abaikan error, $result tetap false sehingga pesan "tabel belum dibuat" akan muncul di bawah
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <!-- Menggunakan Bootstrap 5 untuk styling tampilan yang rapi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Daftar Data Dosen</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>NIDN</th>
                                <th>Nama Dosen</th>
                                <th>Email</th>
                                <th>No Telp/HP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Mengecek apakah query berhasil dan ada datanya
                            if ($result && mysqli_num_rows($result) > 0) {
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Menggunakan isset() agar tidak error jika nama kolom berbeda
                                    $nidn = isset($row['nidn']) ? htmlspecialchars($row['nidn']) : (isset($row['NIDN']) ? htmlspecialchars($row['NIDN']) : '-');
                                    $nama = isset($row['nama_dosen']) ? htmlspecialchars($row['nama_dosen']) : (isset($row['nama']) ? htmlspecialchars($row['nama']) : '-');
                                    $email = isset($row['email']) ? htmlspecialchars($row['email']) : '-';
                                    $no_telp = isset($row['no_telp']) ? htmlspecialchars($row['no_telp']) : (isset($row['no_hp']) ? htmlspecialchars($row['no_hp']) : '-');
                                    
                                    echo "<tr>";
                                    echo "<td>{$no}</td>";
                                    echo "<td>{$nidn}</td>";
                                    echo "<td>{$nama}</td>";
                                    echo "<td>{$email}</td>";
                                    echo "<td>{$no_telp}</td>";
                                    echo "</tr>";
                                    $no++;
                                }
                            } else {
                                echo "<tr><td colspan='5' class='text-center text-muted'>Data dosen tidak ditemukan atau tabel 'dosen' belum dibuat.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
