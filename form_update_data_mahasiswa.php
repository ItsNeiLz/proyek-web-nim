<?php
require_once "koneksi.php";

$cari = $_GET['id'];

$sql = "SELECT * FROM tb_mahasiswa WHERE NIM='$cari'";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_array($result);
?>

<html>
<head>
    <title>Update Data Mahasiswa</title>
</head>

<body>

<h1>Update Data Mahasiswa</h1>

<form action="ctrl_mahasiswa.php?act=update" method="POST">

<input type="hidden" name="idn"
       value="<?php echo $data['NIM']; ?>">

<table border="0">

<tr>
    <td>NIM</td>
    <td>:
        <input type="text"
               value="<?php echo $data['NIM']; ?>"
               disabled>
    </td>
</tr>

<tr>
    <td>Nama</td>
    <td>:
        <input type="text"
               name="txt_nm"
               value="<?php echo $data['Nama']; ?>">
    </td>
</tr>

<tr>
    <td>Tempat Lahir</td>
    <td>:
        <input type="text"
               name="txt_tl"
               value="<?php echo $data['Tempat_Lahir']; ?>">
    </td>
</tr>

<tr>
    <td>Tanggal Lahir</td>
    <td>:
        <input type="date"
               name="txt_tgl"
               value="<?php echo $data['Tanggal_Lahir']; ?>">
    </td>
</tr>

<tr>
    <td>Fakultas</td>
    <td>:
        <input type="text"
               name="txt_fak"
               value="<?php echo $data['Fakultas']; ?>">
    </td>
</tr>

<tr>
    <td>Jurusan</td>
    <td>:
        <input type="text"
               name="txt_jur"
               value="<?php echo $data['Jurusan']; ?>">
    </td>
</tr>

<tr>
    <td>IPK</td>
    <td>:
        <input type="text"
               name="txt_ipk"
               value="<?php echo $data['IPK']; ?>">
    </td>
</tr>

<tr>
    <td colspan="2">
        <input type="submit" value="Save">
        <input type="button"
               value="Back"
               onclick="history.back()">
    </td>
</tr>

</table>

</form>

</body>
</html>