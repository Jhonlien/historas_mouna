<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect('localhost', 'root', 'root', 'historas');
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $query = mysqli_query($conn,"SELECT username, password FROM user WHERE username = '$username' AND password = '$password'");
        $fetch = mysqli_fetch_array($query);
        if(mysqli_num_rows($query) > 0){
            session_start();
            $_SESSION["username"] = $fetch['username'];
            $_SESSION["password"] = $fetch['password'];
            header('location:index.php');
        }
        else if($username != $fetch['username'] || $password != $fetch['password']){
            header('location:login.php?err=1');
        }
        else{
            printf("Errormessage: %s\n", mysqli_error($conn));
        }
    }
?>