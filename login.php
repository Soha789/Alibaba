<?php
session_start();
if(isset($_POST['login'])){
  $_SESSION['user'] = $_POST['username'];
  header("Location: home.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
body{font-family:Poppins,sans-serif;background:#f7f7f7;margin:0;}
form{
  width:400px;margin:100px auto;background:white;padding:30px;border-radius:10px;
  box-shadow:0 4px 10px rgba(0,0,0,0.1);
}
h2{text-align:center;color:#ff6b00;}
input,button{width:100%;padding:10px;margin:10px 0;border:1px solid #ddd;border-radius:5px;}
button{background:#ff6b00;color:white;font-weight:bold;border:none;}
button:hover{background:#ff944d;}
</style>
</head>
<body>
<form method="POST">
  <h2>Login to Your Account</h2>
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit" name="login">Login</button>
  <p style="text-align:center;">Don't have an account? <a href="signup.php">Sign Up</a></p>
</form>
</body>
</html>
