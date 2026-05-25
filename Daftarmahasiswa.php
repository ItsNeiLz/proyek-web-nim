<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: Arial;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
        button {
            padding: 5px 10px;
        }
    </style>
</head>
<body>

<h2>Daftar Mahasiswa</h2>

<?php
$mahasiswa = [
    ["13012012","James Situmorang","Medan","1995-04-02","Kedokteran","Kedokteran Gigi",2.70],
    ["14005011","Riana Putria","Padang","1996-11-23","FMIPA","Kimia",3.10],
    ["15002032","Rina Kumala Sari","Jakarta","1997-06-28","Ekonomi","Akuntansi",3.40],
    ["15021044","Rudi Permana","Bandung","1994-08-22","FASILKOM","Ilmu Komputer",2.90],
    ["15003036","Sari Citra Lestari","Jakarta","1997-12-31","Ekonomi","Manajemen",3.50]
];
?>

<table>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Fakultas</th>
        <th>Jurusan</th>
        <th>IPK</th>
        <th>Aksi</th>
    </tr>

    <?php foreach($mahasiswa as $mhs): ?>
    <tr>
        <td><?= $mhs[0] ?></td>
        <td><?= $mhs[1] ?></td>
        <td><?= $mhs[2] ?></td>
        <td><?= $mhs[3] ?></td>
        <td><?= $mhs[4] ?></td>
        <td><?= $mhs[5] ?></td>
        <td><?= $mhs[6] ?></td>
        <td><button>Edit</button></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>