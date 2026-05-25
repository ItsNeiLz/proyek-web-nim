<?php 
 require_once "koneksi.php";
 $cari=$_POST['id_cari'];
 $sql = "SELECT * FROM tb_mahasiswa WHERE nama LIKE '%$cari%'";
 $result = mysqli_query($con, $sql);
?>
<html>
 <head>	<title>Daftar Mahasiswa</title></head>	
 <body>
   <a href='tampil_data_mahasiswa2.php'> Kembali</a> <p> 
   <table border="1">
   <tr>
	<th>NIM</th> 
    <th>Nama </th> 
    <th>Tempat Lahir</th> 
    <th>Tanggal Lahir</th> 
    <th>Fakultas</th>
    <th>Jurusan</th>
    <th>IPK</th>  
    </th>
   </tr>
   <?php while ($data = mysqli_fetch_row($result)): ?>
    <tr>
    	<td><?php echo $data[0]; ?></td>
    	<td><?php echo $data[1]; ?></td>
    	<td><?php echo $data[2]; ?></td>    	
      <td><?php echo $data[3]; ?></td>   
      <td><?php echo $data[4]; ?></td>  
      <td><?php echo $data[5]; ?></td>
      <td><?php echo $data[6]; ?></td>  
    </tr>	
   <?php endwhile; ?>
   </table>
  </body>
</html>
<?php
  // Membebaskan sumber daya hasil query
  mysqli_free_result($result);
  // Menutup koneksi dengan menggunakan fungsi umum
  db_disconnect($con);
?>
