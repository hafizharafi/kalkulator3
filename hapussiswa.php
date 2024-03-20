<?php
 include_once('koneksi.php');

 $idsiswa=$_GET['idsiswa'];

 $result=mysqli_query($conn, "delete from tbsiswa where idsiswa='$idsiswa'");


 if($result){
    echo "<script>alert('Data berhasil di hapus!')</script>";			
    echo "<script>window.open('tampilsiswa.php','_self')</script>";
    }else{
        echo "Perubahan data gagal=<br/>".mysql_error();
    }
 ?>
 