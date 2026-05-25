<?php 
  require_once "koneksi.php";	
  $act = $_GET['act'];
  
  if($act == "tambah") {
    $sql = "INSERT INTO tb_mahasiswa 
              (NIM, Nama, Tempat_Lahir, Tanggal_Lahir, Fakultas, Jurusan, IPK) 
	          VALUES 
		          ('$_POST[txt_nim]','$_POST[txt_nama]', '$_POST[txt_tl]', 
               '$_POST[txt_tgl]', '$_POST[txt_fklt]', '$_POST[txt_jrsn]',
               '$_POST[txt_ipk]')";	 					
    
    mysqli_query($con, $sql); 

    // Menutup koneksi
    db_disconnect($con);
  } 

  if($act == "update") {
    $sql = "UPDATE tb_mahasiswa SET							 	        
            NIM = '$_POST[txt_nim]',
            Nama = '$_POST[txt_nm]',
            Tempat_Lahir = '$_POST[txt_tl]',
            Tanggal_Lahir = '$_POST[txt_tgl]', 			
            Fakultas = '$_POST[txt_fak]',	  	
            Jurusan = '$_POST[txt_jur]',
            IPK = '$_POST[txt_ipk]'

            WHERE NIM = '$_POST[idn]'"; 
				
    mysqli_query($con, $sql);

	  // Menutup koneksi
	  db_disconnect($con);
  }
  if($act == "hapus") {
    $sql = "DELETE FROM tb_mahasiswa WHERE NIM = $_GET[idm]";
    mysqli_query($con, $sql);

    // Menutup koneksi
    db_disconnect($con);
  }
  header('location:tampil_data_mahasiswa3.php'); 
?>
