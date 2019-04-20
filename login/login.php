<?php

 $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "travel";
// connection to the database
    $conn = mysqli_connect($server,$username,$password,$dbname);

    if(!$conn){
        echo "Databse connection error : "+mysqli_error($conn);
    }else{
        echo "Connection established";
    }

session_start(); 

$email=($_POST['email']);
$password=($_POST['psw']);

$result = mysql_query("SELECT email, password FROM users WHERE email = $email");

$row = mysql_fetch_array($result);

if($row["email"]==$email && $row["password"]==$password)
    echo"<script>
alert('Login successful!');
window.location.href='../map.html';
</script>";
else
    echo"<script>
alert('Credentials not valid.! Please try again');
window.location.href='../login/login.html';
</script>";
?>