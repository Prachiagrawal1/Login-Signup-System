<?php
include 'connection.php';

if(isset($_REQUEST['signup-submit'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = md5($_REQUEST['password']);
    $url = $_REQUEST['url'];
    
    $result = mysqli_query($connection,"INSERT INTO users (name,email,password,website) VALUES ('$name','$email','$password','$url')");
    
    if(!$result){
        echo "Fail".mysqli_error($connection);
    }
    else{
        echo "Sucess!!";
    }
}
else if(isset($_REQUEST['login-submit']))
{
    $email = $_REQUEST['email'];
    $password = md5($_REQUEST['password']);

    $result = mysqli_query($connection, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    if(!mysqli_num_rows($result)>0){
        echo "Fail".mysqli_error($connection);
    }
    else{
        echo "Login Sucess!!";
    }
   
}
//$result = mysqli_query($connection, "SELECT email,password FROM users WHERE email='$email' AND password='$password'");
?>