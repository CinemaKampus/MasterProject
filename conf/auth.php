<?php
session_start();
include ('config.php');
$username =$_POST['username'];
$password =$_POST['password'];

$query = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($query)>0){
    
    $user = mysqli_fetch_array($query);
    $_SESSION['nama']  = $user['nama'];
    $_SESSION['role'] = $user['role'];
    header('Location:../?page=home');
}
else if($username == '' || $password == ''){
    header('Location:../login/?page=notfound');
}
else{
    header('Location:../login?page=notfound');
}

?>