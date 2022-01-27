<?php

require 'fungsional.php';
//koneksi
//cek apakah tombol submit sudah ditekan apa belum
 if( isset($_POST["submit"])) {
//cek apakah data berhasil ditambahkan/tidak
if( tambah($_POST) > 0) {
echo "
<script>
alert('pendaftaran berhasil!');
document.location.href = 'index.php';
</script>
";
}else{
echo "
<script>
alert('pendaftaran tidak berhasil!');
document.location.href = 'index.php';
</script>
";
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>SMK Informatika PESAT</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="main">
        <img src="p.png" alt="">

    </div>
    <div class="xx">
        <h1 style="margin-left: 400px;">FORM PENDAFTARAN SISWA BARU 2022/2023</h1>
    </div>
    <form action="" enctype="multipart/form-data" method="post">
        <div class="mb-3">
            <label for="nama" class="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama">
        </div>
        <div class="mb-3">
            <label for="ttl" class="ttl">Tempat Lahir</label>
            <input type="text" class="form-control" name="ttl" id="ttl" aria-describedby="ttl">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="tanggal">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" aria-describedby="tanggal">
        </div>
        <div class="mb-3">
            <label for="warga" class="warga">Warga Negara</label>
            <input type="text" class="form-control" name="warga" id="warga" aria-describedby="warga">
        </div>
        <div class="mb-3">
            <label for="alamt" class="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="alamat">
        </div>
        <div class="mb-3">
            <label for="email" class="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" aria-describedby="email">
        </div>
        <div class="mb-3">
            <label for="nohp" class="nohp">No HP</label>
            <input type="text" class="form-control" name="nohp" id="nohp" aria-describedby="nohp">
        </div>
        <div class="mb-3">
            <label for="asalsmp" class="asalsmp">Asal SMP</label>
            <input type="text" class="form-control" name="asalsmp" id="asalsmp" aria-describedby="asalsmp">
        </div>
        <div class="mb-3">
            <label for="ayah" class="ayah">Nama Ayah</label>
            <input type="text" class="form-control" name="ayah" id="ayah" aria-describedby="ayah">
        </div>
        <div class="mb-3">
            <label for="ibu" class="ibu">Nama Ibu</label>
            <input type="text" class="form-control" name="ibu" id="ibu" aria-describedby="ibu">
        </div>
        <div class="mb-3">
            <label for="penghasilan" class="penghasilan">Penghasilan</label>
            <input type="text" class="form-control" name="penghasilan" id="penghasilan" aria-describedby="penghasilan">
        </div>
        <div class="mb-3">
            <label for="foto" class="foto">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto" aria-describedby="foto">
        </div>
        <a class="btn btn-danger" style="margin-left: 50px;" href="index.php">Kembali</a>
        <button type="submit" name="submit" class="btn btn-primary" style="margin-left: 600px;">Submit</button>
    </form>
</body>

</form>
</body>

</html>