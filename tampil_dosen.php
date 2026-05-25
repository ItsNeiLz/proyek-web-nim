<?php
// Menghubungkan ke database
require_once 'koneksi.php';

// Query mengambil data dosen
$query = "SELECT * FROM dosen";

// Menjalankan query
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Daftar Data Dosen</h3>
        </div>

        <div class="card-body">

            <table class="table table-bordered table-striped table-hover">

                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>NIDN</th>
                        <th>Nama Dosen</th>
                        <th>Email</th>
                        <th>No Telp</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                // Mengecek apakah data ada
                if(mysqli_num_rows($result) > 0){

                    $no = 1;

                    while($row = mysqli_fetch_assoc($result)){

                        echo "<tr>";
                        echo "<td>".$no++."</td>";
                        echo "<td>".$row['nidn']."</td>";
                        echo "<td>".$row['nama_dosen']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['no_telp']."</td>";
                        echo "</tr>";
                    }

                } else {

                    echo "
                    <tr>
                        <td colspan='5' class='text-center'>
                            Data dosen tidak ditemukan
                        </td>
                    </tr>
                    ";
                }
                ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>