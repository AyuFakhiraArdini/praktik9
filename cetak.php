<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK </title>
</head>
<body>
    <center><h1 >FORM CETAK</h1></center>
<?php
include "koneksi.inc.php";
$cetak = mysqli_query($conn, "SELECT * from kontak ORDER BY nama") or die("Proses cetak gagal" );

    echo "<table width='85%' cellpadding='2' cellspacing='0' border='1'>
    <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Kota</th>
    <th>Pesan</th>";
    $no=1;
    foreach($cetak as $hasil){
    echo "<tr>
    <td>$no</td>
    <td>".$hasil['Nama']."</td>
    <td>".$hasil['Jkel']."</td>
    <td>".$hasil['Email']."</td>
    <td>".$hasil['Alamat']."</td>
    <td>".$hasil['Kota']."</td>
    <td>".$hasil['Pesan']."</td> 
    </tr>";
    $no++;
}
echo "</table>";
?>
<a  href="index.php">Kembali</a>
</body>
</html> 