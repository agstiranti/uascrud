<?php
include ("config.php");

//ambil data dari folmulir//
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$alamat=$_POST['alamat'];
$kode_prodi=$_POST['prodi'];

//buat query//
 $sql="INSERT INTO mahasiswa (nama, nim, alamat,kode_prodi) VALUE ('$nama', '$nim', '$alamat', '$kode_prodi')";
 $query=mysqli_query($koneksi, $sql);

 if($query)//kondisi berhasil
 {
     echo 
     "
     <script type='text/javascript'>
        alert ('Data Berhasil Tersimpan');
        window.location='tampil_data.php';
    </script>
    ";
 }else{
    echo 
    "
    <script type='text/javascript'>
       alert ('Data Gagal Tersimpan');
       window.location='form_daftar.php';
   </script>
   ";
 }
?>  

