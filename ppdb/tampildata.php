<?php

session_start();

if (!$_SESSION["login"]){

header("Location: login.php");
exit; 
}


    require 'fungsional.php';

    $user = read("SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database PPDB</title>
</head>
<body>
    <center><h1>DATA PPDB</h1></center>
    <br>
    <center><a class ="btn btn-primary" href="tambah.php">+ &nbsp;Tambah Data</a></center><br>
    <table border = "1" cellpadding = "10" cellspacing = "0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>TTL</th>
            <th>Warga Negara</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No hp</th>
            <th>Asal SMP</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Penghasilan</th>
            <th>Foto</th>
            <th>Action</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach($user as $a) :?>

        <tr>
            <td><?= $i++ ?></td>
            <td><?= $a['nama'] ?></td>
            <td><?= $a['ttl'] ?></td>
            <td><?= $a['tanggal'] ?></td>
            <td><?= $a['warga'] ?></td>
            <td><?= $a['alamat'] ?></td>
            <td><?= $a['email'] ?></td>
            <td><?= $a['nohp'] ?></td>
            <td><?= $a['asalsmp'] ?></td>
            <td><?= $a['ayah'] ?></td>
            <td><?= $a['ibu'] ?></td>
            <td><?= $a['penghasilan'] ?></td>
            <td><img src="img/<?= $a['foto'] ?>" alt="" width = "100"></td>
            <td>
                <a class="btn btn-warning" href="ubah.php?id=<?= $a ["id"]; ?>">Ubah  </a>
                <a class="btn btn-danger" href="hapus.php?id=<?= $a ["id"]; ?>" onclick = "return confirm ('yakin kah ?')";>Hapus</a>
            </td>
        </tr>
        
        <?php endforeach;?>

    </table><br>
     <a class="btn btn-danger" href="logout.php">Logout</a>
</body>
</html>