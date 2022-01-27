<?php 

session_start();

require 'fungsional.php';

if($_SESSION['login']){
    header("Location:tampildata.php");
    exit;
}

if(isset($_POST['berhasil'])){

    $Username = $_POST['username'];
    $Password= $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$Username'");
 
    if(mysqli_num_rows($result) == 1){
        
        $row = mysqli_fetch_assoc($result);
        if(password_verify($Password, $row['password'])){
            
            $_SESSION['login'] = true;
                 
            header("Location:tampildata.php");
        }else{
            echo "
                    <script>
                        alert('Username / Password salah');
                    </script>
                ";
        }

    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Halaman Login</title>
  </head>
  <body>
    <h1>LOGIN</h1>

    <form action="" method = "post" enctype = "multipart/form-data">
            <input type = "hidden" name = "id">
                <div class = "row">
                <div class="col-lg">
                <div class="mb-3">
                 <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="text" class="form-control" name = "username" id="exampleFormControlInput1" placeholder="masukkan username">
                </div>

                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control" name = "password" id="exampleFormControlInput1" placeholder="masukkan password">
                </div>
            </div>
        </div>

    <a href = "tambahadmin.php" class="btn btn-danger mb-3">Daftar</a>
    <button type="submit" class="btn btn-primary mb-3" name = "berhasil">Masuk</button>

    </form>
  </body>

      
    </div>
</html>