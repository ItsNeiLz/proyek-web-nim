<html> 
 <head>        
  <title>Tambah Data Mahasiswa</title>
 </head>
 <body>
  <h1>Tambah Data Mahasiswa</h1>
  <form action="ctrl_mahasiswa.php?act=tambah" method ="POST"> 
   <table border ="0">
    
    <tr> 
     <td> NIM </td> 
     <td> : <input type="int" name="txt_nim"></td>
    </tr>
    <tr> 
     <td> Nama </td> 
     <td> : <textarea name='txt_nama' style='width: 250px; height: 
             100px;'></textarea>
     </td>
    </tr>
    <tr> 
     <td> Tempat Lahir </td> 
     <td> : <input type="text" name="txt_tl"> </td>
    </tr>
    <tr> 
     <td> Tanggal Lahir </td> 
     <td> : <input type="date" name="txt_tgl"> </td>
    </tr>
    <tr> 
     <td> Fakultas </td> 
     <td> : <input type="text" name="txt_fklt"> </td>
    </tr>
    <tr> 
     <td> Jurusan </td> 
     <td> : <input type="text" name="txt_jrsn"> </td>
    </tr>
    <tr> 
     <td> IPK </td> 
     <td> : <input type="varchar" name="txt_ipk"></td>
    </tr>

    
     <tr> 
     <td> <input type="submit" value="Save">   
          <input type=button value=Back onclick=self.history.back()> 
     </td>
    </tr>
   </table>            
  </form>
 </body>
</html>
