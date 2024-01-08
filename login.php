<?php
session_start();
include 'koneksi.php';
if(isset($_POST['username'])){
    $usernsme = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM login where username='$usernsme' and password='$password'");

    if(mysqli_num_rows($query) > 0){
        $data = mysqli_fetch_array($query);
        $_SESSION['login'] = $data;
        echo '<script> alert("Selamat datang di CulinaryHub, tempat makan favorit untuk keluarga! '.$data['nama'].'");
        location.href="index.php"</script>';
    } else {
        echo '<script>alert("Username dan Password tidak sesuai, silahkan login kembali.");</script>';
    }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Form Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
<form action="" method="post">
    <h2 class="text-center">Log in</h2>       
    <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username" required="required">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Log in</button>
    </div>
    <div class="clearfix">
        <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
        <a href="#" class="float-right">Forgot Password?</a>
    </div>        
</form>

    <p class="text-center"><a href="daftar.php">Create an Account</a></p>
</div>
</body>
</html>