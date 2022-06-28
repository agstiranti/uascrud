<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h3> Data Mahasiswa Kuliah Online Universitas Paramadina </h3>
    <table border= "1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kode Prodi</th>
        </tr>
        <?php

include ("config.php");
$data= mysqli_query ($koneksi, "SELECT * FROM mahasiswa");

while ($data_mhs = mysqli_fetch_array ($data)){
    echo "<tr>";
    echo "<td>" . $data_mhs ['nim'] . "</td>";
    echo "<td>" . $data_mhs ['nama'] . "</td>";
    echo "<td>" . $data_mhs ['alamat'] . "</td>";
    echo "<td>" . $data_mhs ['kode_prodi'] . "</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>