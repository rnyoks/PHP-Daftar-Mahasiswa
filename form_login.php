<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Form</title>
<link rel="stylesheet" href="style.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

</head>
<body>
<?php
if(isset($_GET["login_error"])){
    echo"<script>alert('USERNAME DAN PASSWORD ANDA SALAH , SILAHKAN ULANGI LAGI !');window.location='form_login.php'</script>";
}
?>
<h1 class="fw-bold text-center mt-5">Login Form Pendataran Mahasiswa - Universitas Gunadarma</h1>
<div class="container text-center">
    <div class="row">
        <div class="col-sm-12 justify-content-end">
        <form method="post" action="logincek.php">
        <img src="gunadarma.png" width="150px" height="150px" class="rounded-circle mt-5" />

<p><input type="text" name="username" value="" placeholder="Username or 
Email" class="mt-5"></p>

<p><input type="password" name="password" value=""
placeholder="Password" ></p>
<p class="submit"><input type="submit" name="commit" value="Login"></p>
</form>            
        </div>
    </div>
</div>

</div>
</body>
</html>