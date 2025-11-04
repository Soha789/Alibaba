<?php
session_start();
if(isset($_POST['signup'])){
  $_SESSION['user'] = $_POST['username'];
  $_SESSION['role'] = $_POST['role'];
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sign Up</title>
<style>
body{font-family:Poppins,sans-serif;background:#f3f3f3;margin:0;}
form{
  width:400px;margin:80px auto;background:white;padding:30px;
  border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,0.1);
}
h2{text-align:center;color:#ff6b00;}
input,select,button{width:100%;padding:10px;margin:10px 0;border:1px solid #ddd;border-radius:5px;}
button{background:#ff6b00;color:white;font-weight:bold;border:none;}
button:hover{background:#ff944d;}
</style>
</head>
<body>
<form method="POST">
  <h2>Create Your Account</h2>
  <input type="text" name="username" placeholder="Enter Username" required>
  <input type="email" name="email" placeholder="Enter Email" required>
  <input type="password" name="password" placeholder="Enter Password" required>
  <select name="role">
    <option value="buyer">Buyer</option>
    <option value="supplier">Supplier</option>
  </select>
  <button type="submit" name="signup">Sign Up</button>
  <p style="text-align:center;">Already have an account? <a href="login.php">Login</a></p>
</form>
</body>
</html>
