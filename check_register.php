<?php
$conn  = mysqli_connect('localhost','root','root','historas');
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $check= mysqli_query($conn, "SELECT * FROM user WHERE username='$username' OR email = '$email'");
    if(mysqli_num_rows($check) > 0){
        header('location:register.php?err=1');
    }
    else{
        $query = mysqli_query($conn, "INSERT INTO user VALUES (null,'$username', '$email', '$password') ");
        if($query){
            header('location:login.php?success=1');
        }
        else{
            printf("Errormessage: %s\n", mysqli_error($conn));
        }
    }
}
?>