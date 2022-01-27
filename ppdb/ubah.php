<?php
  require 'fungsional.php';

$id = $_GET['id'];

$mhs = read("SELECT * FROM siswa WHERE id = $id")[0];

  if(isset($_POST['submit'])){
    if(ubah($_POST) > 0 ){
      
      echo "
        <script>
            alert('Data berhasil diubah!');
            document.location.href = 'tampildata.php';
        </script>
     ";
    }else{
      echo "
      <script>
          alert('Data gagal diubah!');
      </script>
   ";
    }
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <title>Ubah Data</title>
  </head>
  <body>
   <div>
        <h1 class = "mb-3">Ubah Data </h1>
        <form action="" method="post" enctype = "multipart/form-data">
        <input type="hidden" name = "id" value = "<?= $mhs['id'] ?>">
        <input type="hidden" name = "fotolama" value = "<?= $mhs['foto'] ?>">
        <div class = "row">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama</label>
          <input type="text" class="form-control" name = "nama" value = "<?= $mhs['nama'] ?>" >
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
          <input type="text" class="form-control" name = "ttl" value = "<?= $mhs['ttl'] ?>" >
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">TTL</label>
          <input type="date" class="form-control" name = "tanggal" value = "<?= $mhs['tanggal'] ?>" >
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Warga Negara</label>
          <input type="text" class="form-control" name = "warga" value = "<?= $mhs['warga'] ?>" >
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Alamat</label>
          <input type="text" class="form-control" name = "alamat" value = "<?= $mhs['alamat'] ?>" >
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="text" class="form-control" name = "email" value = "<?= $mhs['email'] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nomor HP</label>
          <input type="text" class="form-control" name = "nohp" value = "<?= $mhs['nohp'] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Asal SMP</label>
          <input type="text" class="form-control" name = "asalsmp" value = "<?= $mhs['asalsmp'] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Ayah</label>
          <input type="text" class="form-control" name = "ayah" value = "<?= $mhs['ayah'] ?>" >
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Ibu</label>
          <input type="text" class="form-control" name = "ibu" value = "<?= $mhs['ibu'] ?>">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Penghasilan Orang Tua</label>
          <input type="text" class="form-control" name = "penghasilan" value = "<?= $mhs['penghasilan'] ?>">
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Foto</label>
          <div class="row">
          <div class="col-lg-3">
          <img src="img/<?= $mhs['foto'] ?>" alt="" width = "150"></img>
        </div>
        <div class="col-lg-9">
          <input class="form-control" type="file" id="formFile" name = "foto">  
        </div>
      </div>
      </div>
      </div>
       </div>    
            <button style="margin-left: 1410px; padding: 15px;" type="submit" class="btn btn-primary" name = "submit">Ubah</button>
        
        </form>
         </div>
    </div> 
  </body>

      
    </div>
</html>