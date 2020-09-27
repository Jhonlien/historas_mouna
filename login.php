<?php
session_start();
if($_SESSION['username']){
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Historas - Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
  <link rel="stylesheet" href="bootstrap/style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="global-container">
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Login to Historas</h3>
		<div class="card-text">
            <?php 
                if($_GET['err'] == 1){
                    echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">Username atau Password Salah.</div>";
                }
                if($_GET['success'] == 1){
                    echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">Silahkan Login.</div>";
                }
            ?>
			<form method="POST" action="check_login.php">
				<!-- to error: add class "has-danger" -->
				<div class="form-group">
					<label for="exampleInputEmail1">Username</label>
					<input type="text" class="form-control form-control-sm" id="exampleInputEmail1" name="username" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control form-control-sm" id="exampleInputPassword1" name="password" required>
				</div>
				<button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
				<div class="sign-up">
					Buat Akun? <a href="register.php">Disini.</a>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
<!-- partial -->
  
</body>
</html>

