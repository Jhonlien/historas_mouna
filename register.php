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
  <title>Historas - Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
  <link rel="stylesheet" href="bootstrap/style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="global-container">
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Register to Historas</h3>
		<div class="card-text">
            <?php 
                if(isset($_GET['err']) == 1){
                    echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">Username atau Email Telah Tersedia!.</div>";
                }
            ?>
			<form method="POST" action="check_register.php">
                <!-- to error: add class "has-danger" -->
                <div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type="email" class="form-control form-control-sm" id="exampleInputEmail1" name="email" required>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Username</label>
					<input type="text" class="form-control form-control-sm" id="exampleInputEmail1" name="username" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control form-control-sm" id="exampleInputPassword1" name="password" required>
				</div>
				<button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
				<div class="sign-up">
					Sudah mempunyai akun? <a href="login.php">Login Disini.</a>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
<!-- partial -->
  
</body>
</html>

