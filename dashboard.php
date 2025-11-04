<?php
session_start();
if(!isset($_SESSION['user'])){ header("Location: login.php"); exit(); }
if(isset($_POST['add'])){
  $_SESSION['newProduct'] = $_POST['product'];
  header("Location: home.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Supplier Dashboard</title>
<style>
body{font-family:Poppins,sans-serif;background:#f2f2f2;margin:0;}
form{
  width:400px;margin:100px auto;background:white;padding:30px;
  border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,0.1);
}
h2{text-align:center;color:#ff6b00;}
input,textarea,button{width:100%;padding:10px;margin:10px 0;border:1px solid #ddd;border-radius:5px;}
button{background:#ff6b00;color:white;font-weight:bold;border:none;}
button:hover{background:#ff944d;}
</style>
</head>
<body>
<form method="POST">
  <h2>Add a New Product</h2>
  <input type="text" name="product" placeholder="Product Name" required>
  <textarea name="details" placeholder="Product Description" required></textarea>
  <input type="number" name="price" placeholder="Price per Unit" required>
  <button type="submit" name="add">Add Product</button>
  <p style="text-align:center;"><a href="home.php">Back to Home</a></p>
</form>
</body>
</html>
