<?php 
    require 'fungsional.php';

if(isset($_POST['regis'])){
   if(registrasi_login($_POST) > 0 ){
        echo "
         <script>
           alert('Registrasi telah berhasil!!');
           document.location.href = 'login.php';
         </script>
        ";
   }else{
    echo "
         <script>
           alert('Registrasi gagal!!');
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

    <title>Registrasi</title>
  </head>
  <body>
        <h1 class = "mb-3">Registrasi </h1>
        <form action="" method="post" enctype = "multipart/form-data">
            <div class = "row">
                <div class = "col-lg">
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Username</label>
                         <input type="text" class="form-control" name = "username" id="exampleFormControlInput1" placeholder="masukkan username">
                    </div>

                    <div class = "row">
                        <div class = "col-lg-6">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Password</label>
                              <input type="password" class="form-control" name = "password" id="exampleFormControlInput1" placeholder="masukkan password">
                            </div>
                        </div>
                    </div>    
                </div>
            </div>    

            <a href = "login.php"class="btn btn-danger mb-3">Kembali</a>
            <button type="submit" class="btn btn-primary mb-3" name = "regis">Daftar</button>
        
        </form>
  </body>

      
    </div>
</html>