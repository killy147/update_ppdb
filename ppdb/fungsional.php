<?php

$conn = mysqli_connect('localhost', 'root','', 'db_daftar');

function read($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data) {

    global $conn;
    $Nama = htmlspecialchars($data["nama"]);
    $Ttl = htmlspecialchars($data["ttl"]);
    $Tanggal = htmlspecialchars($data["tanggal"]);
    $Warga = htmlspecialchars($data["warga"]);
    $Alamat = htmlspecialchars($data["alamat"]);
    $Email = htmlspecialchars($data["email"]);
    $Nomer = htmlspecialchars($data["nohp"]);
    $Smp = htmlspecialchars($data["asalsmp"]);
    $Ayah = htmlspecialchars($data["ayah"]);
    $Ibu = htmlspecialchars($data["ibu"]);
    $Penghasilan = htmlspecialchars($data["penghasilan"]);
    $Foto = uploadimg();

    $query = "INSERT INTO siswa VALUES('', '$Nama', '$Ttl', '$Tanggal', '$Warga', '$Alamat', '$Email', '$Nomer', '$Smp', '$Ayah', '$Ibu', '$Penghasilan', '$Foto')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    $ID = htmlspecialchars($data["id"]);
    $Nama = htmlspecialchars($data["nama"]);
    $Ttl = htmlspecialchars($data["ttl"]);
    $Tanggal = htmlspecialchars($data["tanggal"]);
    $Warga = htmlspecialchars($data["warga"]);
    $Alamat = htmlspecialchars($data["alamat"]);
    $Email = htmlspecialchars($data["email"]);
    $Nomer = htmlspecialchars($data["nohp"]);
    $Smp = htmlspecialchars($data["asalsmp"]);
    $Ayah = htmlspecialchars($data["ayah"]);
    $Ibu = htmlspecialchars($data["ibu"]);
    $Penghasilan = htmlspecialchars($data["penghasilan"]);
    $Fotolama = htmlspecialchars($data["fotolama"]);
    if($_FILES['foto']['error'] == 4){
        $foto = $Fotolama;
    }else{
        $foto = uploadimg();
    }
    $query =
    "UPDATE siswa SET
    nama = '$Nama',
    ttl = '$Ttl',
    tanggal = '$Tanggal',
    warga = '$Warga',
    alamat = '$Alamat',
    email = '$Email',
    nohp = '$Nomer',
    asalsmp = '$Smp',
    ayah = '$Ayah',
    ibu = '$Ibu',
    penghasilan = '$Penghasilan',
    foto = '$foto'
    WHERE id = $ID
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($ID) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $ID");
    return mysqli_affected_rows($conn);
}

function registrasi_login($data){
    global $conn;
    
    $Username = strtolower(htmlspecialchars($data['username']));
    $Password = mysqli_real_escape_string($conn, htmlspecialchars($data['password']));
    
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$Username'");

    if(mysqli_fetch_assoc($result)){
        echo "
            <script>
                alert('Username sudah terdaftar');
            </script>
        ";

        return false;
    }

    $Password = password_hash($Password, PASSWORD_DEFAULT);


    mysqli_query($conn, "INSERT INTO users VALUES('','$Username','$Password')");

    return mysqli_affected_rows($conn);
}

function uploadimg(){
    $Img = $_FILES['foto']['name'];
    $tmpimg = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmpimg, 'img/'.$Img);
    return $Img;





}


?>