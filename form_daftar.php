<?php
include ("config.php");
$data_prodi = mysqli_query($koneksi, "SELECT kode_prodi, nama_prodi FROM prodi");
?>

<html>
<head>
    <title>Belajar Membuat CRUD dengan Mysqli</title>
</head>
<body>
    <header>
        <h3> Pendaftaran Mahasiswa Baru UKM Pemrograman Web</h3>
        <h1> Universitas Paramadina</h1>
    </header>
    <nav></nav>
    <article>
        <h3> Formulir Pendaftaran Mahasiswa Baru UKM Pemrograman Web</h3>
        <form action="proses_pendaftaran.php" method="POST">
            <fieldset>
                <p>
                    <label input="nama">Nama Lengkap:</label>
                    <input type="text" name="nama" placeholder="nama lengkap"/>
                </p>
                <p>
                    <label input ="nim" >Nim:</label>
                    <input type="text" name="nim" placeholder="nim"/>
                </p>
                <p>
                    <label input ="alamat"> Alamat:</label>
                    <textarea name="alamat"></textarea>
                 </p>
                 <p>
                    <label input="prodi">Program Studi</label>
                    <select name="prodi">
                        <?php
                        while ($koneksi=mysqli_fetch_array($data_prodi)){ ?>
                        <option value= "<?php echo $koneksi['kode_prodi'];?>"><?php echo $koneksi['nama_prodi'];?></option>
                        <?php } ?>
                    </select>
                </p>
                <p>
                    
                </p>
                <p>
                    <input type="submit" value="daftar" name="daftar"/>

                </p>
            </fieldset>             
        </form>
    </article>
    <footer>
        Copyright &copy;Tifani;
    </footer>
</body>
</html>