<?php
//connecting to the database
session_start();
$db = mysqli_connect("localhost", "root", "", "register");

$username = "";
$password ="";
$email ="";
$password1 ="";

$error_array = [];

if(mysqli_connect_errno()){
  echo "Failed to connect to the datbase".mysqli_connect_error();
}
//Register
if(isset($_POST["register"]){
  if(empty(trim($_POST["username"]))){
    array_push($error_array, "Username is required");
  }else{
    $username = mysqli_real_escape_string($_POST["username"]);
  }
  if(empty(trim($_POST["email"]))){
    array_push($error_array, "Email is required");
  }else{
    $email = mysqli_real_escape_string($_POST["username"]);
  }
  if(empty(trim($_POST["password"]))){
    array_push($error_array, "Password is required");
  }else {
    $password = mysqli_real_escape_string($_POST["password"]);
    $password1 = mysqli_real_escape_string($_POST["password1"]);
    if($password1 !== $password){
      array_push($error_array, "Passwords do not match");
    }
  }
}

if(count($error_array) !== 0 ){
  
}else{
$query = "INSERT into 'users' (username, email, password) VALUES ('$username', '$emai', '$password')";
$result = mysqli_query($db,$query);
}

//Login

if($_POST["login"]){
  $username = 
}









?>